@extends('dashboard.base')

@section('title', 'MicroCMS dashboard - Edit category')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')

    <main class="content">

      <h1>Edit category</h1>

      @if ($info = session('info'))
        <div class="alert-success">{{ $info }}</div>
      @endif

      <form class="form" action="/category/update/{{ $category->id }}" method="post">

        @csrf

        <label for="category_name">Category name:</label>
        <input id="category_name" name="category_name" class="form-control" type="text" value="{{ $category->name }}" />

        <label for="category_slug">Category slug:</label>
        <input id="category_slug" name="category_slug" class="form-control" type="text" value="{{ $category->slug }}" />

        <input type="submit" value="Update" />

      </form>

    </main>

@endsection
