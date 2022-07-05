@extends('dashboard.base')

@section('title', 'MicroCMS dashboard - Edit page')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')

    <main class="content">

      <h1>Edit page</h1>

      @if ($info = session('info'))
        <div class="alert-success">{{ $info }}</div>
      @endif

      <form class="form" action="/page/update/{{ $page->id }}" method="post">

        @csrf

        <label for="page_title">Page title:</label>
        <input id="page_title" name="page_title" type="text" value="{{ $page->title }}" />

        <label for="page_content">Page content:</label>
        <textarea id="page_content" name="page_content">{{ $page->content }}</textarea>

        <input type="submit" value="Save" />

        <script src="/js/ckeditor/ckeditor.js"></script>
        <script>CKEDITOR.replace('page_content');</script>

      </form>

    </main>

@endsection
