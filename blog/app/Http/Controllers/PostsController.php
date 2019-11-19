<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function view(Post $post)
    {
        return view('posts.view', ['post' => $post]);
    }

    public function create()
    {
        // create form
        echo '..::DEBUGGING::..';
        echo '<pre>';
        var_dump('create');
        echo '</pre>';
        exit;
    }

    public function store(Request $request)
    {
        // save new entity
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
