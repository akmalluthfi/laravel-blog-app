@extends('layouts.main')

@section('content')
  <div class="row justify-content-center align-items-center vh-100">
    <div class="col col-sm-10 col-md-8 col-lg-6">

      @if (session()->has('auth'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('auth')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <h3>Login</h3>
      <p class="text-black-50 mb-4">Enter your credentials to access your account</p>
      <form class="mb-3" action="">
        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" id="password" placeholder="Password" name="password">
          <label for="password">Password</label>
        </div>
        <div class="text-center">
          <button type="submit" class="w-100 btn btn-primary">Login</button>
        </div>
      </form>

      <p class="text-center text-black-50">Don't have account? <a href="/register">Register</a></p>
    </div>
  </div>
@endsection