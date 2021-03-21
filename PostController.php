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
    public function get_id($id){
        $post = Post::find($id);
        if ($post == null) {
            return response([404], 404);
        }   
        return view('blog.show_post_get_id')->with(['post' => $post]);
      }
}
