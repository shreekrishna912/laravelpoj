<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = Post::create($validated);
        return response()->json($post, 201);
    }
    public function index()
    {
        return Post::all();
    }
    public function show($id){
        return Post::findorFail($id);
    }
}
