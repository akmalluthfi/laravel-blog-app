@extends('layouts.main')

@section('content')
  <h1 class="text-center text-muted mb-4 pb-3 border-bottom">Post Categories</h1>
  <ul class="list-group list-group-flush">
    @foreach ($categories as $category)
      <li class="list-group-item pb-2 {{ ($loop->last) ? 'border-bottom' : ''  }}">
        <h4 class="m-0"><a class="text-decoration-none text-reset" href="/blog/category/{{ $category->slug }}">{{ $category->name }}</a></h4>
      </li>
    @endforeach
  </ul>
@endsection