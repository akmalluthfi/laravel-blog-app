@extends('layouts.main')

@section('content')
  <h1 class="text-center text-muted mb-4 pb-3 border-bottom">Posts in Category : {{ $category }}</h1>
  @foreach ($posts as $post)
    <article class="card mb-3 border-0 flex-md-row justify-content-md-between mx-auto" style="max-width: 960px;">
      <a href="/blog/{{ $post->slug }}" class="col-md-5">
        <img class="object-cover w-100" src="/assets/image/wallpaper-{{ mt_rand(1, 4) }}.png" style="min-height: 166px" alt="">
      </a>
      <div class="py-3 col-md-7 ps-md-4 py-md-0 post-body">
        <h4 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-black">{{ $post->title }}</a></h4>
        <h6 class="card-subtitle mb-2 text-muted">By. <a href="/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/blog/category/{{ $post->category->slug }}">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</h6>
        <p class="card-text">{{ $post->excerpt }}</p>
      </div>
    </article>
  @endforeach
@endsection