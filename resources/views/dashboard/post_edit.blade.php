@extends('dashboard.base')

@section('title', 'MicroCMS dashboard - Edit post')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')

    <main class="content">

      <h1>Edit post</h1>

      @if ($info = session('info'))
        <div class="alert-success">{{ $info }}</div>
      @endif

      <form class="form" action="/post/update/{{ $post->id }}" method="post">

        @csrf

        <label for="post_title">Post title:</label>
        <input id="post_title" name="post_title" type="text" value="{{ $post->title }}" />

        <label for="post_content">Post content:</label>
        <textarea id="post_content" name="post_content">{{ $post->content }}</textarea>

        <input type="submit" value="Save" />

        <script src="/js/ckeditor/ckeditor.js"></script>
        <script>CKEDITOR.replace('post_content');</script>

      </form>

    </main>

@endsection
