@extends('dashboard.base')

@section('header')
  <header class="main-header">
    <h1>Micro<span>CMS</span></h1>
    <nav>
      {{ 'getUsername()' }}
      <a href="{{ 'settings.site_url' }}/"><i class="fa fa-home" aria-hidden="true"></i></a>
      <a href="{{ 'settings.site_url' }}/dashboard/profile"><i class="fa fa-user" aria-hidden="true"></i></a>
      <a href="{{ 'settings.site_url' }}/users/logout"><i class="fa fa-power-off" aria-hidden="true"></i></a>
    </nav>
  </header>
@endsection
