@extends('admin.layout.app')

@section('content')
<h2 class="text-primary display-4">Postagens Blog</h2>

<div class="row">
    <div class="col-sm-12">
        <a href="{{ route('posts.create')}}" class="btn btn-primary float-left mb-1" >Criar postagem</a>
    </div>
</div>
<table class="table table-striped">
    
    <thead >        
        <tr>
            <td>Title</td>
            <td>Status</td>
            <td>Create</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @forelse ($posts as $post)
        <tr>
            <td>
                {{ $post->title }}
            </td>
            <td>
                @if ($post->is_active)
                    <span class="badge badge-success">Ativo</span>
                @else
                    <span class="badge badge-danger">Inativo</span>                    
                @endif
            </td>
            <td>
                {{ date('d/m/y', strtotime($post->created_at)) }}
            </td>
            <td>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">Detalhes</a>
            </td>
        @empty
        </tr>
        @endforelse
        
    </tbody>

</table>
{!! $posts->links() !!}
    
@endsection
 

