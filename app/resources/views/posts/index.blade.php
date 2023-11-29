@extends('posts.base')

@section('title', 'Posts')


@section('content')
  <main class="wrapper">
    <ul class="posts">
      @foreach ($posts as $post)
        <li>
          <h2 class="posts__heading"><a href="/{{ $post->slug }}">{{ $post->title }}</a></h2>
          <time class="posts__date">{{ $post->created_at }}</time>
        </li>
      @endforeach
    </ul>
  </main>
@endsection
