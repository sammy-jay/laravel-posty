<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'title' => 'required|max:100',
            'body' => 'required',
        ]);

        // Post::create([
        //     'user_id' => auth()->user()->id,
        //     'body' => $request->body
        // ]);

        return view('posts.index');
    }
}
