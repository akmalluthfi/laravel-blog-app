@extends('layouts.main')

@section('content')
  <article>
    <h5>{{ $post->title }}</h5>
    <h6>By. <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
    {!! $post->body !!}
  </article>

  <a href="/blog" class="d-block mt-4">Back</a>
@endsection