@extends('admin.layout.app')

@section('title','Cadastrar novo Post')

@section('content')
<h1>Cadastrar novo Post</h1>
<form action="{{ route('posts.store') }}" method="post">
    @include('admin.pages.posts._partials.form')
    <button class="btn btn-success btn-block">Salvar</button>
</form>

@endsection