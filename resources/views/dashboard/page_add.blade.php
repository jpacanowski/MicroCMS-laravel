@extends('dashboard.base')

@section('title', 'MicroCMS dashboard - Add new page')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')

    <main class="content">

      <h1>Add new page</h1>

      <form class="form" method="post" action="/page/store">

        @csrf

        <label for="page_title">Page title:</label>
        <input id="page_title" name="page_title" type="text" value="" />

        <label for="page_content">Page content:</label>
        <textarea id="page_content" name="page_content"></textarea>

        <input type="submit" value="Publish" />

        <script src="/js/ckeditor/ckeditor.js"></script>
        <script>CKEDITOR.replace('page_content');</script>

      </form>

    </main>

@endsection
