@extends('layouts.app')

@section('title', 'blog')

@section('meta-description', 'blog description')

{{-- recorreremos los post con un foreach  --}}

@section('content')
    <h2>Bienvenidos a Blog</h2>

    <a href="{{ route('posts.create') }}">Create new post</a>

    @foreach ($posts as $post)
        <h2>
            <a href="{{ route('posts.show', $post) }}">
                {{ $post->title }}
            </a>
        </h2>
    @endforeach

@endsection
