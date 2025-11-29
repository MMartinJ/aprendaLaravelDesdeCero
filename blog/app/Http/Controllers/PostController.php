<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
class PostController extends Controller
{
    //index return data
    public function index(){
        $posts = Post::where('status', 2)->latest('id')->paginate(11);
        return view('posts.index', compact('posts'));
    }

    //show post same category sidebar
    public function show(Post $post){

        $this->authorize('published', $post);
        

        $categoria = Post::where('category_id', $post->category_id)
        ->where('status',2)
        ->where('id', '!=', $post->id)
        ->latest('id')
        ->take(4)
        ->get();

        return view('posts.show', compact('post', 'categoria'));
    }
//devuelve los posts de la misma categoria
    public function category(Category $category){
        $posts = Post::where('category_id', $category->id)
        ->where('status',2)
        ->latest('id')
        ->paginate(6);
        return view('posts.category', compact('posts','category'));
    }

//devuelve los posts del mismo tag
public function tag(Tag $tag){
    $posts = Post::where('status',2)
        ->latest('id')
        ->paginate(4);
    return view('posts.tag',compact('posts','tag'));
}
}
