@extends('admin.layout.app')

@section('title','Editando Post')

@section('content')
<h1>Editando Post</h1>
<form action="{{ route('posts.update' , $post->id) }}" method="post">
@method('PUT')
@include('admin.pages.posts._partials.form')
<button class="btn btn-info btn-block">Salvar edição</button>
</form>
<a href="{{ route('posts.index') }}" class="text-warning">Inicio</a> 
@endsection

