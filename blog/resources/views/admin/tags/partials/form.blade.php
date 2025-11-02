<div class="form-group">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="@if($routeName == 'admin.tags.edit') {{ $tag->nombre }} @endif">
    @error('nombre')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control" name="slug" id="slug" value="@if($routeName == 'admin.tags.edit') {{ $tag->slug }} @endif" readonly>
    @error('slug')
        <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
