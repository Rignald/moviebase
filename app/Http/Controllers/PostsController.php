<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    // wrapmodel binding
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

//    public function show($id)
//    {
//        $post = Post::find($id);
//        return view('posts.show', compact('post'));
//    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
        Post::create(request(['title', 'body']));

        // redirect to home
        return redirect('/');

    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
