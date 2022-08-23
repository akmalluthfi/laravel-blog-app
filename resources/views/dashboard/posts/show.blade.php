@extends('dashboard.layouts.main')

@section('content')
  <article class="mt-5 col-lg-8">
    <header class="text-start mb-3">
      <img class="mb-3 w-100" src="/assets/image/wallpaper-{{ mt_rand(1, 4) }}.png" alt="{{ $post->title }}">
      <h2 class="mb-3 mx-2 fw-semibold">{{ $post->title }}</h2>
      <div class="menu-icon">
        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to my posts</a>
        <a href="/dashboard/posts/{{ $post->slug}}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
          @csrf
          @method('delete')
          <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span>Delete</button>
        </form>
      </div>
    </header>
    <section class="mx-auto mb-5 post-content">
      {!! $post->body !!}
    </section>
  </article>

@endsection