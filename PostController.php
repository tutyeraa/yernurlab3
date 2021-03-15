<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('blog.index')->with(['posts' => $posts]);
    }
    public function store(Request $request)
    {
        Post::create([
            'tittle'=>$request->tittle,
            'body'=>$request->body
        ]);
    return back();
    }
}
