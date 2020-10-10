@extends('admin.layout.app')

@section('title','Editar categoria')

@section('content')
<form action="{{ route('categories.update', ['category' => $category->id]) }}" method="post">
    @method('PUT')
    @include('admin.pages.categories._partials.form')
    <button class="btn btn-info btn-block">Atualizar categoria</button>  
</form>
<a href="{{ route('categories.index') }}" class="text-warning pt-2">Inicio</a> 
@endsection