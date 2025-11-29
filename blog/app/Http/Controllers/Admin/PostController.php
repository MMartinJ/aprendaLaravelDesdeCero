<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $routeName = request()->route()->getName();

        $categories = Category::all();
        $tags = Tag::pluck('nombre', 'id');
        
        $categories_array = [];

        foreach($categories as $category){
            $categories_array += [$category->id => $category->nombre];
        }

        return view('admin.posts.create',compact('categories_array','tags','routeName'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        
         $post = Post::create($request->all());

         if($request->file('postImage')){
            $url = Storage::put('public/posts', $request->file('postImage'));
            $post->image()->create([
                'url' => $url
            ]);
         }
         
         if($request->tags){
            $post->tags()->attach($request->tags);
         }

         return redirect()
         ->route('admin.posts.edit',compact('post'));
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //authorize
        $this->authorize('author', $post);

        $routeName = request()->route()->getName();

        $categories = Category::all();
        $tags = Tag::pluck('nombre', 'id');
        $categories_array = [];
        $tag_id = [];

        $image = $post->image;

        $post_tag = $post->tags()->get();
        for ($i=0; $i < count($post_tag); $i++) { 
            $obj = (int) $post_tag[$i]->id;
            array_push($tag_id, $obj);
        }

        foreach($categories as $category){
            $categories_array += [$category->id => $category->nombre];
        }

        return view('admin.posts.edit', compact('post', 'categories_array', 'tags', 'routeName', 'tag_id', 'image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, Post $post)
    {
        //authorize
        $this->authorize('author', $post);
        
        $post->update($request->all());

        
        if($request->file('postImage')){
            $url = Storage::put('public/posts', $request->file('postImage'));
            if($post->image){
                Storage::delete($post->image->url);
                $post->image->update(['url' => $url]);
            }
            else{
                $post->image->create(['url' => $url]);
            }
        }

        if($request->tags){
            $post->tags()->sync($request->tags);
         }

        return redirect()->route('admin.posts.edit', $post)
        ->with('info', 'El post se actualizo correctamente');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //authorize
        $this->authorize('author', $post);
        $post->delete();

        return redirect()->route('admin.posts.index')
        ->with('info', 'El post se elimino correctamente');
    }
}
