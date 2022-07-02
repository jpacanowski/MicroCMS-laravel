@extends('dashboard.base')

@section('title', 'MicroCMS dashboard - Add new post')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')

    <main class="content">

      <h1>Add new post</h1>

      <form class="form" method="post" action="/post/store">

        @csrf

        <label for="post_title">Post title:</label>
        <input id="post_title" name="post_title" type="text" value="" />

        <label for="post_content">Post content:</label>
        <textarea id="post_content" name="post_content"></textarea>

        <input type="submit" value="Publish" />

        <script src="/js/ckeditor/ckeditor.js"></script>
        <script>CKEDITOR.replace('post_content');</script>

      </form>

    </main>

@endsection
