@extends('layouts.main')

@section('content')
  <h1 class="text-center text-muted mb-4">Recent Posts</h1>

  <form action="" method="GET" class="mb-3">
    <div class="row justify-content-center">
      <div class="col-9 col-md-8 col-lg-6 mb-3">
        <input type="text" name="search" class="form-control" placeholder="Search..." value="{{ request('search') }}">
      </div>
      <div class="col-auto mb-3">
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </div>
  </form>

  @foreach ($posts as $post)
    <article class="card mb-3 border-0 flex-md-row justify-content-md-between mx-auto" style="max-width: 960px;">
      <a href="/blog/{{ $post->slug }}" class="col-md-5">
        @if ($post->image)
          <img class="object-cover w-100" src="{{ asset('storage/' . $post->image) }}" style="min-height: 166px" alt="">
        @else
          <img class="object-cover w-100" src="/assets/image/wallpaper-{{ mt_rand(1, 4) }}.png" style="min-height: 166px" alt=""> 
        @endif
      </a>
      <div class="py-3 col-md-7 ps-md-4 py-md-0 post-body">
        <h4 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-black">{{ $post->title }}</a></h4>
        <h6 class="card-subtitle mb-2 text-muted">By. <a href="/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/blog/category/{{ $post->category->slug }}">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}</h6>
        <p class="card-text">{{ $post->excerpt }}</p>
      </div>
    </article>
  @endforeach

  {{ $posts->links() }}

@endsection