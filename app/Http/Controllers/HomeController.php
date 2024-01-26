<?php

namespace App\Http\Controllers;

use App\Models\HomepagePosts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = HomepagePosts::all();
        return view('home.home', compact('posts'));
    }

    public function edit()
    {
        return view('home.edit');
    }

    public function store(Request $request)
    {
        $post        = new HomepagePosts();
        $post->post  = $request->post;
        $post->title = $request->title;
        $post->save();

        return redirect(route('home.index'))->with('success', 'erfolgreich angelegt');
    }
}
