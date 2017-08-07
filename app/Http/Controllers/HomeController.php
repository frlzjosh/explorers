<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('author')->get();
        return view('home', compact('posts'));
    }

    public function showProfile($id)
    {
        $user = User::with('comments', 'posts')->findOrFail($id);
        return view('pages.profile.show', compact('user'));
    }

    public function edit($id)
    {
        return $user = User::findOrFail($id);
    }
}
