<?php

namespace App\Http\Controllers;

use App\Post;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $users = auth()->user()->posts()->pluck('posts.user_id');
               // get all the user_ids of the profiles that the authenticated user is following

      // $posts = Post::whereIn('user_id',$users)->orderBy('created_at', 'DESC')->get();
      // $posts = Post::whereIn('user_id',$users)->latest()->get();
      $posts = Post::whereIn('user_id',$users)->latest()->paginate(2);
      // dd($posts);
        return view('home', compact('posts'));
    }
}
