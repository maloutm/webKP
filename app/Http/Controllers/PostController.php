<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Tag;
use App\Post;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile/post_new');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'tags' => 'required',
        ]);


        $request->blog()->posts()->create([
           'title' => $request->title,
            'content' => "net",
        ]);

        $tag = new Tag;
        $tag->name = $request->tags;
        $tag->save();

        return redirect('/admin/post');
    }
}