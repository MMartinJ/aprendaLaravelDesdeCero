<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\StorePostRequest;

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
        $categories = Category::all();
        $tags = Tag::pluck('nombre', 'id');
        
        $categories_array = [];

        foreach($categories as $category){
            $categories_array += [$category->id => $category->nombre];
        }

        return view('admin.posts.create',compact('categories_array','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
         $post = Post::create($request->all());

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
        view('admin.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
