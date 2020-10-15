<?php

namespace App\Http\Controllers\Admin\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->orderBy('id', 'DESC')->paginate(4);
        return view('site.posts.index' , compact('posts'));
       
    }
    
    
    public function single($slug)
    {
        $post = $this->post->whereSlug($slug)->first();
        return view('site.posts.single', compact('post'));
        
    }
    
}
