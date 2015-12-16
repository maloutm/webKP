<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return view('auth/register_domen');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:25|unique:blogs',
        ]);

        $request->user()->blogs()->create([
            'name' => $request->name,
        ]);

        return redirect('/admin');
    }
}