
@csrf
<div class="form-group">
    <label>Nome</label>
    <input type="text" name="name" class="form-control" value="{{ $category->name ?? '' }}">
</div>
<div class="form-group">
    <label>Descricao</label>
    <input type="text" name="description" class="form-control" value="{{ $category->description ?? '' }}">
</div>
<div class="form-group">
    <label>Slug</label>
    <input type="text" name="slug" class="form-control" value="{{ $category->slug ?? '' }}">
</div>