@extends('admin.layout.app')

@section('title','Editando Post')

@section('content')
<h1>Editando Post</h1>
<form action="{{ route('posts.update' , $post->id) }}" method="post">
@method('PUT')
@include('admin.pages.posts._partials.edit')
<button class="btn btn-info btn-block"></button>
</form>

@endsection