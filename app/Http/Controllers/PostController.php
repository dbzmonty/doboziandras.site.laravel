<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class PostController extends Controller
{
    // Portfólió oldal, kártyákkal
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(4);
        return view('portfolio.list')->with(compact('posts'));
    }

    // Post hozzáadás űrlap
    public function create()
    {
        return view('portfolio.add');
    }

    // Post mentése
    public function store(Request $request)
    {
        // tiltani a scriptet
        $request->validate([                    
            'title' => 'required|min:3|max:240',
            'description' => 'required|min:3|max:240',
            'content' => 'required|min:3',
            'cover' => 'file|mimes:jpg,jpeg,bmp,png'
        ]);

        $cover = $this->uploadImage($request);

        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        if ($cover) { $post->cover = $cover->basename; }
        $post->save();

        return redirect()
            ->route('portfolio.details', $post)
            ->with('success', __('Post published successfully'));
    }

    // Post megnyitása
    public function show(Post $post)
    {
        return view('portfolio.details')->with(compact('post'));
    }

    private function uploadImage(Request $request)
    {
        $file = $request->file('cover');        
        $fileName = uniqid();
        $cover = Image::make($file)->save(public_path("uploads/{$fileName}.{$file->extension()}"));
        return $cover;
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
