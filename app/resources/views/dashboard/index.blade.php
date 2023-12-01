@extends('dashboard.base')

@section('title', 'Home')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>Dashboard</h1>

    <ul class="dashboard">
      <li>
        <div class="infobox">
          <div class="infobox-inner">
            <p>{{ $posts_number }}</p>
            <h3>Posts number</h3>
          </div>
        </div>
      </li>
      <li>
        <div class="infobox">
          <div class="infobox-inner">
            <p>{{ $pages_number }}</p>
            <h3>Pages number</h3>
          </div>
        </div>
      </li>
      <!-- <li>
        <div class="infobox">
          <div class="infobox-inner">
            <p>{{ '$categories_number' }}</p>
            <h3>Categories number</h3>
          </div>
        </div>
      </li> -->
      <li>
        <div class="infobox">
          <div class="infobox-inner">
            <p>{{ $comments_number }}</p>
            <h3>Comments number</h3>
          </div>
        </div>
      </li>
      <li>
        <div class="infobox">
          <div class="infobox-inner">
            <p>{{ $users_number }}</p>
            <h3>Users number</h3>
          </div>
        </div>
      </li>
      <li>
        <div class="infobox">
          <div class="infobox-inner">
            <p>{{ $php_version }}</p>
            <h3>PHP version</h3>
          </div>
        </div>
      </li>
      <li>
        <div class="infobox">
          <div class="infobox-inner">
            <p>1.0</p>
            <h3>CMS version</h3>
          </div>
        </div>
      </li>
      <!-- <li>
        <div class="infobox">
          <div class="infobox-inner">
            <p id="clock"></p>
            <h3>Current time</h3>
          </div>
        </div>
      </li> -->
    </ul>

  </main>
@endsection
