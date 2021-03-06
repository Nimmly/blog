<?php

namespace App\Http\Controllers;
use App\Tag;

use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
        $posts = $tag->posts()->with('user')->latest()->paginate(10);;

        return view('posts.index', compact('posts'));
    }
}
