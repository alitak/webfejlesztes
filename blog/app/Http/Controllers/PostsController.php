<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts, 'title' => 'My Posts']);
    }

    public function show(Post $post)
    {
        return view('posts.view', ['post' => $post, 'title' => $post->title]);
    }

    public function create()
    {
        // create form
        return view('posts.create', ['title' => 'Create new post']);
    }

    public function store(Request $request)
    {
        // save new entity

        request()->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->save();
        return redirect(route('posts.index'));
    }

    public function edit(Post $post)
    {
        // edit existing entity
    }

    public function update(Request $request)
    {
        // update entity
    }

    public function destroy(Post $post)
    {
        // delete entity
    }
}
