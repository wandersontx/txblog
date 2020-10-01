

@csrf
<div class="form-group">
    <label>Titulo</label>
    <input type="text" name="title" class="form-control" value="{{ $post->title ?? '' }}">
</div>
<div class="form-group">
    <label>Descricão</label>
    <input type="text" name="description" class="form-control" value="{{ $post->description ?? '' }}">
</div>
<div class="form-group">
    <label>Conteúdo</label>
    <textarea cols="30" rows="10" name="conteudo" class="form-control" value="{{ $post->conteudo ?? '' }}"></textarea>
</div>
<div class="form-group">
    <label>Slug</label>
    <input type="text" name="slug" class="form-control" value="{{ $post->slug ?? '' }}">
</div>
