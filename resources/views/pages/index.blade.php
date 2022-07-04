@extends('pages.base')

@section('title', 'Pages')

@section('content')

    @foreach ($pages as $page)
        <h2><a href="{{ $page->slug }}">{{ $page->title }}</a></h2>
        <time>{{ $page->published_at }}</time>
    @endforeach

@endsection
