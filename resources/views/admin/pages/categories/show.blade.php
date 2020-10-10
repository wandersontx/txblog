@extends('admin.layout.app')

@section('content')



<h1 class="display-3 text-info">Detalhes</h1>

<ul class="list-group list-group-flush">
    <li class="list-group-item">
        <strong>categoria nº: </strong>{{ $category->id }}
    </li>
    <li class="list-group-item">
        <strong>Nome: </strong> {{ $category->name }}
    </li>   
    <li class="list-group-item">
        <strong>Data da criação: </strong>   {{ date('d/m/y H:i:s', strtotime($category->created_at)) }}
    </li>    
    <li class="list-group-item">
        <strong>Description: </strong>
        {{ $category->description }}
    </li>   
    <li class="list-group-item">
        <strong>Slug: </strong>
        {{ $category->slug }}
    </li>  
    <li class="list-group-item">
        <div class="row form-group">          
                <div class="col-sm-6">
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-block">Editar</a>
                </div>
                <div class="col-sm-6">
                    <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-block">Remover</button>
                    </form>                   
                </div>           
        </div>

    </li>
</ul>
<a href="{{ route('categories.index') }}" class="text-warning">Inicio</a> 

@endsection