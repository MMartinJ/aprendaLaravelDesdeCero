<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //index return data
    public function index(){
        $posts = Post::where('status', 2)->latest('id')->paginate(11);
        return view('posts.index', compact('posts'));
    }
}
