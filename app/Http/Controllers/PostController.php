<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{
    //funcion invocable
    /* public function __invoke() */ //util cuando es un controlador de un solo methodo
    public function index()
    {
        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }

    public function store(SavePostRequest $request)
    {
        /* $validate = $request->validate([
            'title' => ['required'],
            'body' => ['required'],
        ]); */

        /* $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save(); */

        Post::create($request->validated());

        /* session()->flash('status', 'Post created!'); */ //mensaje creado

        return redirect()->route('posts.index')->with('status', 'Post created!'); //con with reemplazamos session flash
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post) //editar post
    {
        /* $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save(); */

        $post->update($request->validated());

        /* session()->flash('status', 'Post update!'); */ //mensaje creado

        return redirect()->route('posts.show', $post)->with('status', 'Post update!'); //reemplazo de session flash
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('status', 'Post delete!');
    }
}
