

@csrf
<div class="form-group">
    <label>Titulo</label>
    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $post->title ?? '' }}">
    @error('title')
        <p class="invalid-feedback">{{$message}}</p>
    @enderror
</div>
<div class="form-group">
    <label>Descricão</label>
    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ $post->description ?? '' }}">
    @error('description')
    <p class="invalid-feedback">{{$message}}</p>
    @enderror
</div>
<div class="form-group">
    <label>Conteúdo</label>
    <textarea cols="30" rows="10" name="content" class="form-control @error('content') is-invalid @enderror">{{ $post->content ?? '' }}</textarea>
    @error('content')
    <p class="invalid-feedback">{{$message}}</p>
    @enderror
</div>
<div class="form-group">
    <label>Slug</label>
    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ $post->slug ?? '' }}">
    @error('slug')
    <p class="invalid-feedback">{{$message}}</p>
    @enderror
</div>
<div class="form-group">
    <label>Foto de Capa</label>
    <input type="file" name="thumb" class="form-control @error('thumb') is-invalid @enderror">
    @error('thumb')
    <p class="invalid-feedback">{{$message}}</p>
    @enderror
</div>
<div class="form-group">
    <label>Categorias</label>
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-2 custom-control custom-checkbox">
                     <input
                      type="checkbox" class=" @error('categories[]') is-invalid @enderror" name="categories[]" value="{{ $category->id }}"
                     @isset($post)
                        @if ($post->categories->contains($category)) checked @endif 
                     @endisset 
                     
                     >
                     {{ $category->name }}
            </div>
        @endforeach
        @error('categories')
            <p class="invalid-feedback">{{$message}}</p>
        @enderror
    </div>
</div>
<hr>


