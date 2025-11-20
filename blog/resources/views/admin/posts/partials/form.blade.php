 <div class="form-group">
     <label for="titulo" class="form-label">Titulo</label>
     <input type="text" class="form-control" name="title" id="title" value="@if ($routeName == 'admin.posts.edit') {{ $post->title }} @endif"> 
     @error('title')
         <small class="text-danger">{{ $message }}</small>
     @enderror
 </div>
 <div class="form-group">
     <label for="slug" class="form-label">Slug</label>
     <input type="text" class="form-control" name="slug" id="slug" value="@if ($routeName == 'admin.posts.edit') {{ $post->slug }} @endif" readonly>
     @error('slug')
         <small class="text-danger">{{ $message }}</small>
     @enderror
 </div>
 <div class="form-group">
     <label for="Categoria" class="form-label">Categoria</label>
     <select name="category_id" id="category_id" class="form-control">
         @foreach ($categories_array as $key => $value)
             <option value="{{ $key }}" @if ($routeName == 'admin.posts.edit' && $post->category_id == $key) selected @endif">{{ $value }}</option>
         @endforeach
     </select>
     @error('categories')
         <small class="text-danger">{{ $message }}</small>
     @enderror
 </div>
 <div class="form-group">
 </div>
 <!--image-->
 <div class="row post-thumbnail my-4">
     <div class="col-lg-6">
        @if ($routeName == 'admin.posts.edit')
            @if ($post->image->url)
                <img src="{{ Storage::url($image->url) }}" alt="post-thumbnail" class="img-fluid" id="image">               
            @else
                <img src="{{ Storage::url('post-placeholder.png') }}" alt="post-thumbnail" class="img-fluid" id="image">
            @endif
        @else
            <img src="{{ Storage::url('post-placeholder.png') }}" alt="post-thumbnail" class="img-fluid" id="image">
        @endif
         
     </div>
     <div class="col-lg-6">
         <h4>Subir imagen del post</h4>
         <div class="form-group mt-3">
             <input type="file" id="postImage" name="postImage">
             <div class="mt-3">
                 Lorem ipsum.
             </div>
         </div>
         @error('postImage')
             <small class="text-danger">{{ $message }}</small>
         @enderror
     </div>
 </div>
 <div class="form-group">
     <label for="Tags" class="form-label">Etiquetas:&nbsp; </label>
     @foreach ($tags as $key => $value)
         <div class="form-check-inline">
             <input type="checkbox" class="form-check-input" name="tags[]" id="tag-{{ $value }}" value="{{ $key }}"
             @if ($routeName == 'admin.posts.edit')
                 @foreach ($tag_id as $tag)
                     {{ $tag == $key ? ' checked' : '' }}
                 @endforeach
             @endif
             >
             <label for="tag-{{ $value }}" class="form-check-label">{{ $value }}</label>
         </div>
     @endforeach
     @error('tags')
         <small class="text-danger">{{ $message }}</small>
     @enderror
 </div>
 <div class="form-group">
     <label for="estado">Estado</label>
     <div class="form-check">
         <input type="radio" class="form-check-input" name="status" id="status" value="1"
         @if ($routeName == 'admin.posts.edit')
             {{ $post->status == 1 ? 'checked' : ''}}
         @else
             checked
         @endif
         >
         <label for="radio1" class="form-check-label">Borrador</label>
     </div>
     <div class="form-check">
         <input type="radio" class="form-check-input" name="status" id="status" value="2"
         @if ($routeName == 'admin.posts.edit')
             {{ $post->status == 2 ? 'checked' : ''}}
         @endif
         >
         <label for="radio2" class="form-check-label">Publicado</label>
     </div>
     @error('status')
         <small class="text-danger">{{ $message }}</small>
     @enderror
 </div>
 <div class="form-group">
     <label for="Extracto" class="form-label">Extracto</label>
     <textarea name="extract" id="extract" rows="5" class="form-control">
        @if ($routeName == 'admin.posts.edit')
            {{  (isset($post->extract) ? $post->extract : '' )}}
        @endif
     </textarea>
     @error('extract')
         <small class="text-danger">{{ $message }}</small>
     @enderror
 </div>
 <div class="form-group">
     <label for="Contenido" class="form-label">Contenido</label>
     <textarea name="content" id="content" rows="5" class="form-control">
        @if ($routeName == 'admin.posts.edit')
            {{  (isset($post->content) ? $post->content : '' )}}
        @endif
     </textarea>
     @error('content')
         <small class="text-danger">{{ $message }}</small>
     @enderror
 </div>
