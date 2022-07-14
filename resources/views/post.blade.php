@extends('layouts.main')

@section('content')
  <article>
    <h5>{{ $post['title'] }}</h5>
    <h6>By {{ $post['author'] }}</h6>
    <p>{{ $post['body'] }}</p>
  </article>

  <a href="/blog">Back</a>
@endsection