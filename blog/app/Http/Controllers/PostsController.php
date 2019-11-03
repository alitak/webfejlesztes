<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function view($id)
    {
        $post = \DB
            ::table('posts')
            ->where('slug', $id)
            ->firstOrFail();

        return view('index', compact('post'));
    }
}
