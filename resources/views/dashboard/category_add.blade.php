@extends('dashboard.base')

@section('title', 'MicroCMS dashboard - Add new category')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')

    <main class="content">

      <h1>Add new category</h1>

      <form class="form" method="post" action="/category/store">

        @csrf

        <label for="category_name">Category name:</label>
        <input id="category_name" name="category_name" class="form-control" type="text" value="" />

        <input type="submit" value="Save" />

      </form>

    </main>

@endsection
