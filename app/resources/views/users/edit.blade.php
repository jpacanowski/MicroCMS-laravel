@extends('dashboard.base')

@section('title', 'Edit user')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>Edit user</h1>

    @if ($info = session('info'))
      <div class="alert-success">{{ $info }}</div>
    @endif

    <form class="form" method="post" action="/users/{{$user->id}}">

      @csrf
      @method('PUT')

      <label for="username">User name:</label>
      <input id="username" name="name" type="text" class="form-control" value="{{$user->name}}" />

      @error('name')
        <p class="alert-danger">{{$message}}</p>
      @enderror

      <label for="firstname">First name:</label>
      <input id="firstname" name="firstname" type="text" class="form-control" value="{{$user->firstname}}" />

      @error('firstname')
        <p class="alert-danger">{{$message}}</p>
      @enderror

      <label for="lastname">Last name:</label>
      <input id="lastname" name="lastname" type="text" class="form-control" value="{{$user->lastname}}" />

      @error('lastname')
        <p class="alert-danger">{{$message}}</p>
      @enderror

      <label for="email">E-mail:</label>
      <input id="email" name="email" type="email" class="form-control" value="{{$user->email}}" />

      @error('email')
        <p class="alert-danger">{{$message}}</p>
      @enderror

      <label for="role">User role:</label>
      <select id="role" name="role" class="form-control">
        <option value="READER" {{ $user->role == 'READER' ? 'selected' : '' }}>Reader</option>
        <option value="AUTHOR" {{ $user->role == 'AUTHOR' ? 'selected' : '' }}>Author</option>
        <option value="ADMIN" {{ $user->role == 'ADMIN' ? 'selected' : '' }}>Admin</option>
      </select>

      <input type="submit" value="Save changes" />

    </form>

  </main>
@endsection
