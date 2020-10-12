

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
    <textarea cols="30" rows="10" name="content" class="form-control">{{ $post->content ?? '' }}</textarea>
</div>
<div class="form-group">
    <label>Slug</label>
    <input type="text" name="slug" class="form-control" value="{{ $post->slug ?? '' }}">
</div>
<div class="form-group">
    <label>Foto de Capa</label>
    <input type="file" name="thum" class="form-control">
</div>
<div class="form-group">
    <label>Categorias</label>
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-2 checkbox">
                <label>
                     <input
                     input type="checkbox" name="categories[]" value="{{ $category->id }}"
                     @isset($post)
                        @if ($post->categories->contains($category)) checked @endif 
                     @endisset 
                     >
                     {{ $category->name }}
                </label>
            </div>
        @endforeach
    </div>
</div>
<hr>


