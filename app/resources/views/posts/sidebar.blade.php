@extends('posts.base')

@section('sidebar')
  <aside class="sidebar">

    <header class="aboutMe">
      <img class="aboutMe_avatar" src="https://wowthemesnet.github.io/vuepress-theme-mediumish/assets/img/avatar.png" alt="" />
      <h1 class="aboutMe_fullname"><a href="/blog">John Smith</a></h1>
      <p class="aboutMe_desc">Laravel Developer</p>
      <p class="aboutMe_tags">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quisque id diam vel quam. Sit amet purus gravida quis blandit turpis cursus.</p>
    </header>

    <article class="mainNav">
      <div class="wrapper">
        <h6 class="mainNav_header">Last posts</h6>
        <nav>
          <ul class="mainNav_ul">
            <li class="mainNav_item"><a href="/">All posts</a></li>
            @foreach ($last_posts as $post)
              <li class="mainNav_item">
                <a href="/{{ $post->slug }}">{{ $post->title }}</a>
              </li>
            @endforeach
          </ul>
        </nav>
        <h6 class="mainNav_header">Categories</h6>
        <nav>
          <ul class="mainNav_ul">
            @foreach ($categories as $category)
              <li class="mainNav_item">
                <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
              </li>
            @endforeach
          </ul>
        </nav>
      </div>
    </article>

  </aside>
@endsection
