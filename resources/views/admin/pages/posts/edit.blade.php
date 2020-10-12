@extends('admin.layout.app')

@section('title','Editando Post')

@section('content')
<h1>Editando Post</h1>
<form action="{{ route('posts.update' , $post->id) }}" method="post" enctype="multipart/form-data">
@method('PUT')
@include('admin.pages.posts._partials.form')
<div class="form-group">
    <label>Status</label>  
    <div class="form-check">
        <input class="form-check-input" type="radio" name="is_active" id="ativo" value="1" @if ($post->is_active == 1) {{ 'checked'}} @endif>
        <label class="form-check-label" for="ativo">
          Ativo
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="is_active" id="inativo" value="0"  @if ($post->is_active != 1) {{ 'checked'}} @endif>
        <label class="form-check-label" for="inativo">
          Inativo
        </label>
      </div>    
</div>
<button class="btn btn-info btn-block">Salvar edição</button>
</form>
<a href="{{ route('posts.index') }}" class="text-warning">Inicio</a> 
@endsection

