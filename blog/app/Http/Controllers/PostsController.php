<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function view($id)
    {
        return view('index', ['post' => Post::where('slug', $id)->firstOrFail()]);
    }
}
