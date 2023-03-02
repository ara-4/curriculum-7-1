<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminte\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(1)]);
    }
}