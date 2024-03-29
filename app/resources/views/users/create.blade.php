@extends('dashboard.base')

@section('title', 'Add new user')

@section('header')
  @include('dashboard.header')
@stop

@section('navbar')
  @include('dashboard.navbar')
@stop

@section('content')
  <main class="content">

    <h1>Add new user</h1>

    <form class="form" method="post" action="/users">

      @csrf

      <label for="username">User name:</label>
      <input id="username" name="name" type="text" class="form-control" value="{{old('name')}}" />

      @error('name')
        <p class="alert-danger">{{$message}}</p>
      @enderror

      <label for="firstname">First name:</label>
      <input id="firstname" name="firstname" type="text" class="form-control" value="{{old('firstname')}}" />

      @error('firstname')
        <p class="alert-danger">{{$message}}</p>
      @enderror

      <label for="lastname">Last name:</label>
      <input id="lastname" name="lastname" type="text" class="form-control" value="{{old('lastname')}}" />

      @error('lastname')
        <p class="alert-danger">{{$message}}</p>
      @enderror

      <label for="email">E-mail:</label>
      <input id="email" name="email" type="email" class="form-control" value="{{old('email')}}" />

      @error('email')
        <p class="alert-danger">{{$message}}</p>
      @enderror

      <label for="role">User role:</label>
      <select id="role" name="role" class="form-control">
        <option value="AUTHOR" @selected(old('role') == 'AUTHOR')>AUTHOR</option>
        <option value="ADMIN" @selected(old('role') == 'ADMIN')>ADMIN</option>
        <option value="READER" @selected(old('role') == 'READER')>READER</option>
      </select>

      <label for="password">Password:</label>
      <input id="password" name="password" type="password" class="form-control" value="{{old('password')}}" />

      @error('password')
        <p class="alert-danger">{{$message}}</p>
      @enderror

      <label for="password">Password (again):</label>
      <input id="password" name="password_confirmation" type="password" class="form-control" value="{{old('password_confirmation')}}" />

      @error('password')
        <p class="alert-danger">{{$message}}</p>
      @enderror

      <input type="submit" value="Add user" />

    </form>

  </main>
@endsection
