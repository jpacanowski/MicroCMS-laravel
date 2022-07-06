@extends('posts.base')

@section('content')

    @foreach ($posts as $post)
        <h2><a href="/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <time>{{ $post->published_at }}</time>
    @endforeach

@endsection
