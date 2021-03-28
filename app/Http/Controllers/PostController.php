<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;


class PostController extends Controller
{
    public function index() {
        $post = Post::all();

        return view('post.index')->with(['post'=>$post]);
    }

    public function store(Request $request){
        Post::create([
            'id'=>$request->id,
            'title'=>$request->title,
            'body'=>$request->body

        ]);

        return back();
    }

    public function get_post($id) {
        $post = Post::find($id);

        if ($post == null)
        return response(['messsage' => 'post not found'], 404);

        return view('post.detail')->with(['post'=>$post]);
    }
    
}
