@extends('posts.base')

@section('title', '- '.$post->title)

@section('content')

    <h2>{{ $post->title }}</h2>
    <time>{{ $post->published_at }}</time>
    <a href="/category/{{ $post->category->slug }}">
        {{ $post->category->name }}
    </a>
    <div>{!! $post->content !!}</div>

@endsection
