@extends('posts.base')

@section('title', '- '.$post->title)

@section('content')
  <main class="wrapper">
    <article class="post">
      <h1 class="post__heading">{{ $post->title }}</h1>
      <div class="post__content">{!! $post->content !!}</div>
    </article>
  </main>
@endsection
