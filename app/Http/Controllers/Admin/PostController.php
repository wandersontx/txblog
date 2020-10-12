<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    private $postRepository;
    private $catRepository;

    public function __construct(Post $post, Category $category)
    {
        $this->postRepository = $post;
        $this->catRepository  = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->postRepository->orderBy('created_at','desc')->paginate(8);
        return view('admin.pages.posts.index', ['posts' => $posts]);
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->catRepository->all(['id','name']);
        return view('admin.pages.posts.create', compact('categories'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->all();

       try{
        $data['is_active'] = true;
        $user = auth()->user();
        if($request->hasFile('thumb')) {
            $data['thumb'] = $request->file('thumb')->store('thumbs', 'public');
        } else {
            unset($data['thumb']);
        }
        $post = $user->posts()->create($data);
        $post->categories()->sync($data['categories']);
        flash('Postagem inserida com sucesso!')->success();
        return redirect()->route('posts.index');
       } catch (\Exception $e) {
           $message = 'Erro ao remover categoria!';
           if(env('APP_DEBUG')) {
               $message = $e->getMessage();
           }
           flash($message)->warning();
           return redirect()->back();
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post = $this->postRepository->findOrFail($id);
       return view('admin.pages.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = $this->catRepository->all(['id','name']);
        $post = $this->postRepository->find($id);
        if($post)
        return view('admin.pages.posts.edit' , compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        try{
            if($request->hasFile('thumb')) {
                Storage::disk('public')->delete($post->thumb);
                $data['thumb'] = $request->file('thumb')->store('thumbs','public');
            } else {
                unset($data['thumb']);
            }
            $post->update($data);
            $post->categories()->sync($data['categories']);
            flash('Postagem atualizada com sucesso!')->success();
            return redirect()->route('posts.show',['post' => $post->id]);
        } catch (\Exception $e) {
            $message = 'Erro ao atualizar categoria!';
            if(env('APP_DEBUB')) {
                $message = $e->getMessage();
            }
            flash($message)->warning();
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try { 
            $post = $this->postRepository->find($id);    
            $post->delete();
            flash('Post deletado com sucesso')->success();
            return redirect()->route('posts.index');
        } catch (\Exception $e) {
            $message = 'Erro ao deletar post';
            if(env('APP_DEBUG')){
                $message = $e->getMessage();
            }
            flash($message)->warning();
            return redirect()->back();
        }
        
    }
}
