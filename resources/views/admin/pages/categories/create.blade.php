@extends('admin.layout.app')

@section('title','Cadastrar nova categoria')

@section('content')
<h1>Cadastrar nova Categoria</h1>
<form action=" {{ route('categories.store') }}" method="post">
    @include('admin.pages.categories._partials.form') 
    <button class="btn btn-success btn-block">Salvar</button>
</form>
<a href="{{ route('categories.index') }}" class="text-warning pt-2">Inicio</a> 
@endsection



