@extends('layouts.main')

@section('content')
  <article>
    <h3 class="mb-3">{{ $post->title }}</h3>
    <h6 class="mb-4">By. <a href="/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
    {!! $post->body !!}
  </article>

  <a href="/blog" class="d-block mt-4">Back</a>
@endsection