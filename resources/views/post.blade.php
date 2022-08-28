@extends('layouts.main')

@section('content')
  <article class="text-center mx-auto" style="max-width: 960px">
    <header class="text-start mb-5">
      @if ($post->image)
        <img class="w-100 mb-3" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
      @else
        <img class="w-100 mb-3" src="/assets/image/wallpaper-{{ mt_rand(1, 4) }}.png" alt="{{ $post->title }}">  
      @endif
      <h2 class="mb-3 mx-2 fw-semibold">{{ $post->title }}</h2>
      <h5 class="mx-2 text-muted">By. <a class="text-reset text-decoration-none" href="/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-reset text-decoration-none" href="/blog/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
      <small class="mb-4 mx-2">{{ $post->created_at->diffForHumans() }}</small>
    </header>
    <section class="mx-auto my-5 post-content">
      {!! $post->body !!}
    </section>
    <footer class="text-center py-3 bg-light">
      <h6>Copyright&copy; 2022 Deval Blog. All rights reserved.</h6>
    </footer>
  </article>

@endsection