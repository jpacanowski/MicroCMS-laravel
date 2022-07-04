@extends('posts.base')

@section('title', '- '.$post->title)

@section('content')

    <h2><a href="{{ $post->slug }}">{{ $post->title }}</a></h2>
    <time>{{ $post->published_at }}</time>
    <div>{!! $post->content !!}</div>

@endsection
