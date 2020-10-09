@extends('admin.layout.app')

@section('content')



<h1 class="display-3 text-info">Detalhes</h1>

<ul class="list-group list-group-flush">
    <li class="list-group-item">
        <strong>post nº: </strong>{{ $post->id }}
    </li>
    <li class="list-group-item">
        <strong>title: </strong> {{ $post->title }}
    </li>
    <li class="list-group-item">
        <strong>Autor: </strong> {{ $post->user->name }}
    </li>
    <li class="list-group-item">
        <strong>Create Date: </strong>   {{ date('d/m/y H:i:s', strtotime($post->created_at)) }}
    </li>
    <li class="list-group-item">
        <strong>Status: </strong>
        @if ($post->is_active)
            <span class="badge badge-success">Ativo</span>
        @else
            <span class="badge badge-danger">Inativo</span>                    
        @endif
    </li>
    <li class="list-group-item">
        <strong>Description: </strong>
        {{ $post->description }}
    </li>
    <li class="list-group-item">
        <strong>Content: </strong>
        {{ $post->content}}
    </li>
    <li class="list-group-item">
        <div class="row form-group">          
                <div class="col-sm-6">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-block">Editar</a>
                </div>
                <div class="col-sm-6">
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-block">Remover</button>
                    </form>                   
                </div>           
        </div>

    </li>
</ul>
<a href="{{ route('posts.index') }}" class="text-warning">Inicio</a> 

@endsection