@extends('layouts.main')

@section('content')
    <div class="row justify-content-center vh-100 align-items-center">
      <div class="col col-sm-10 col-md-8 col-lg-6 col-xl-5">
        <h3>Register</h3>
        <p class="text-black-50 mb-4">Create an account</p>
        <form class="mb-3" action="/register" method="POST">
            @csrf
          <div class="form-floating mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name" value="{{ old('name') }}">
            <label for="email">Name</label>
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="username" value="{{ old('username') }}">
            <label for="email">Username</label>
            @error('username')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="example@gmail.com" value="{{ old('email') }}">
            <label for="email">Email address</label>
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="password">
            <label for="password">Password</label>
            @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="text-center">
            <button class="w-100 btn btn-primary" type="submit">Register</button>
          </div>
        </form>

        <p class="text-center text-black-50">Already have account? <a href="/login">Login</a></p>
      </div>
    </div>
@endsection