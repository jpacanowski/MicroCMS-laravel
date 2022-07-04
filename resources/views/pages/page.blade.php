@extends('pages.base')

@section('title', $page->title)

@section('content')

    <h2><a href="{{ $page->slug }}">{{ $page->title }}</a></h2>
    <div>{!! $page->content !!}</div>

@endsection
