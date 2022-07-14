@extends('layouts.main')

@section('content')
  <div class="text-center">
    <h1 class="mb-3">About Page</h1>
    <img class="rounded-4 mb-3" src="assets/image/profile.jpeg" alt="Akmal Luthfi" width="200">
    <h1 class="mb-3">{{ $name }}</h1>
    <h5 class="mb-3">{{ $role }}</h5>
  </div>
@endsection
