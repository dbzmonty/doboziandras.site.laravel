<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

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
    // PostRequest validálja a formot
    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->content = $request->content;
        
        // Ha van kép, akkor mentsük el
        if ($request->file('cover'))
        {
            $cover = ImageController::uploadImage($request);
            $post->cover = $cover->basename;
        }   
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

    // Post módosítás űrlap
    public function edit(Post $post)
    {
        return view('portfolio.edit')->with(compact('post'));
    }

    // Post módosításának mentése
    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->except('_token'));
        
        // Ha van kép, akkor mentsük el
        if ($request->file('cover'))
        {
            $cover = ImageController::uploadImage($request);
            $post->cover = $cover->basename;
        }
        // Ha nincs most, de volt, akkor töröljük
        else if ($post->cover)
        {
            ImageController::deleteImage($post->cover);
            $post->cover = null;
        }
        $post->save();

        return redirect()
            ->route('portfolio.details', $post)
            ->with('success', __('Post edited successfully'));
    }

    //
    public function destroy(Post $post)
    {
        //
    }

    public function comment(Post $post, Request $request)
    {
        $request->validate([
            'comment' => 'required|min:10'
        ]);
        
        $comment = new Comment();
        $comment->message = $request->comment;
        $comment->user()->associate($request->user());

        $post->comments()->save($comment);
        $url = route('portfolio.details', $post) . "#comment-{$comment->id}";

        return redirect($url)
            ->with('success', __('Comment saved successfully'));
    }
}
