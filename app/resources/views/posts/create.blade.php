@extends('dashboard.base')

@section('title', 'Add new post')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>Add new post</h1>

    <form class="form" method="post" action="/posts">

      @csrf

      <label for="post_title">Post title:</label>
      <input id="post_title" name="title" type="text" value="{{old('title')}}" />
      @error('title')
        <p class="alert-danger">{{$message}}</p>
      @enderror

      <label for="post_status">Post status:</label>
      <select id="post_status" name="status" class="form-control">
        <option value="PUBLISHED" @selected(old('status') == 'PUBLISHED')>PUBLISHED</option>
        <option value="DRAFT" @selected(old('status') == 'DRAFT')>DRAFT</option>
      </select>

      <label for="post_category" class="visually-hidden">Thread category:</label>
      <select id="post_category" name="category_id" class="form-control">
      <option value="">[Thread category]</option>
        @foreach ($categories as $category)
          <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
        @endforeach
      </select>
      @error('category_id')
        <p class="alert-danger">{{$message}}</p>
      @enderror

      <label for="post_content">Post content:</label>
      <textarea id="post_content" name="content">{{old('content')}}</textarea>
      @error('content')
        <p class="alert-danger">{{$message}}</p>
      @enderror

      <input type="submit" value="Add post" />

      <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
      <script>ClassicEditor.create(document.querySelector('#post_content'))</script>

    </form>

  </main>
@endsection
