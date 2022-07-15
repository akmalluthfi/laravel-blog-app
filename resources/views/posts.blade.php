@extends('layouts.main')

@section('content')
  @foreach ($posts as $post)
    <article class="card mb-3">
      <div class="card-body">
        <h5 class="card-title"><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h5>
        <h6 class="card-subtitle mb-2 text-muted">By. <a href="/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
        <p class="card-text">{{ $post->excerpt }}</p>
      </div>
    </article>
  @endforeach
@endsection