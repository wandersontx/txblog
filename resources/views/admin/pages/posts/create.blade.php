@extends('admin.layout.app')

@section('title','Cadastrar novo Post')

@section('content')
<h1>Cadastrar novo Post</h1>
<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
    @include('admin.pages.posts._partials.form')
    <button class="btn btn-success btn-block">Salvar</button>
</form>
<a href="{{ route('posts.index') }}" class="text-warning pt-2">Inicio</a> 
@endsection