@extends('layouts.main')

@section('content')
  <ul class="list-group list-group-flush">
    @foreach ($categories as $category)
      <li class="list-group-item {{ ($loop->last) ? 'border-bottom' : ''  }}"><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></li>
    @endforeach
  </ul>
@endsection