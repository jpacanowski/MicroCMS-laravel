@extends('dashboard.base')

@section('title', 'MicroCMS dashboard - Posts')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')

    <main class="content">

      <h1>Pages</h1>

      @if ($info = session('info'))
        <div class="alert-success">{{ $info }}</div>
      @endif

      <ul class="posts">

        @foreach ($pages as $page)

          <li class="post-entry">
            <div class="row">
              <h3><a href="/page/{{ $page->slug }}">{{ $page->title }}</a></h3>
              <span>{{ $page->visits_count }} views</span>
            </div>
            <div class="row">
              <ul class="post-entry-menu">
                <li>
                  <a href="/dashboard/page/edit/{{ $page->id }}" class="btn-edit">Edit</a>
                </li>
                <li>
                  <form class="form_delete" method="POST" action="/page/delete/{{ $page->id }}">
                    <input type="hidden" name="_method" value="DELETE" />
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <a href="/dashboard/page/delete/{{ $page->id }}" class="btn-delete" onclick="event.target.parentNode.submit(); return false;">Delete</a>
                  </form>
                </li>
              </ul>
              <time>{{ $page->created_at }}</time>
            </div>
          </li>

        @endforeach

      </ul>

      <a class="button" href="/dashboard/page/add">Add new page</a>

    </main>

@endsection
