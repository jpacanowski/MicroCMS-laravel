@extends('posts.base')

@section('title', $post->title)

@section('sidebar')
  @include('posts.sidebar')
@stop

@section('content')
  <main class="mainContent">
    <article class="wrapper">

      <header>
        <h1>{{ $post->title }}</h1>
        <div class="mainContent_meta">
          <time>
            <i class="fa fa-calendar" aria-hidden="true"></i>{{ $post->created_at }}
          </time>
          <span>
            <i class="fa fa-comment" aria-hidden="true"></i>{{ $post->comments->count() }} comments
          </span>
          <span>
            <i class="fa fa-eye" aria-hidden="true"></i>{{ $post->visits_count }} osób przeczytało
          </span>
        </div>
      </header>

      {!! $post->content !!}

      <footer>
        <section class="post__comments">
          <h4 class="visually-hidden">Comments</h4>
          <ul>
            @foreach ($post->comments as $comment)
              <li class="comment__item">
                <div class="comment__header">
                  <span class="comment__author">{{ $comment->user->name }}</span>
                  <span class="comment__timedate">{{ $comment->created_at }}</span>
                </div>
                <div class="comment__content">{{ $comment->content }}</div>
              </li>
            @endforeach
          </ul>
        </section>

        <section class="">
          <h4 class="visually-hidden">Add comment</h4>
          <form class="form" action="." method="POST">

            @csrf

            <label for="name">Your name *</label>
            <input id="name" type="text" name="name" required />

            <label for="email">Your e-mail *</label>
            <input id="email" type="email" name="email" required />

            <label for="body">Your message *</label>
            <textarea id="body" rows="5" name="body" required></textarea>

            <input type="submit" value="Send comment" class="btn" />

          </form>
        </section>

      </footer>

    </article>
  </main>
@endsection
