<?php


namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class PostController
{
    public function index()
    {
        $posts = Post::get();

        return view('posts.index', ['posts'=>$posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post'=> $post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public  function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('status', 'Post Created!');

        return to_route('posts.index');

    }
}
