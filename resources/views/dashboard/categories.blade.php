@extends('dashboard.base')

@section('title', 'MicroCMS dashboard - Categories')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')

    <main class="content">

      <h1>Categories</h1>

      @if ($info = session('info'))
        <div class="alert-success">{{ $info }}</div>
      @endif

      <ul class="posts">

        @foreach ($categories as $category)

          <li class="post-entry">
            <div class="row">
              <h3><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></h3>
            </div>
            <div class="row">
              <ul class="post-entry-menu">
                <li>
                  <a href="/dashboard/category/edit/{{ $category->id }}" class="btn-edit">Edit</a>
                </li>
                <li>
                  <form class="form_delete" method="POST" action="/category/delete/{{ $category->id }}">
                    <input type="hidden" name="_method" value="DELETE" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <a href="/dashboard/category/delete/{{ $category->id }}" class="btn-delete" onclick="event.target.parentNode.submit(); return false;">Delete</a>
                  </form>
                </li>
              </ul>
            </div>
          </li>

        @endforeach

      </ul>

      <a class="button" href="/dashboard/category/add">Add new category</a>

    </main>

@endsection
