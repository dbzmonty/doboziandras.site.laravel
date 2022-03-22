<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Portfólió oldal, kártyákkal
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(4);
        return view('portfolio')->with(compact('posts'));
    }

    // Post hozzáadás űrlap
    public function create()
    {
        return view('postCreate');
    }

    // Post mentése
    public function store(Request $request)
    {
        // tiltani a scriptet

        $request->validate([                    
            'title' => 'required|min:3|max:240',
            'description' => 'required|min:3|max:240',
            'content' => 'required|min:3'
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->save();

        return redirect()
            ->route('postDetails', $post)
            ->with('success', __('Post published successfully'));
    }

    // Post megnyitása
    public function show(Post $post)
    {
        return view('postDetails')->with(compact('post'));
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
