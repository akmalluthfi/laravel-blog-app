@extends('layouts.main')

@section('content')
    <div class="row justify-content-center vh-100 align-items-center">
      <div class="col col-sm-10 col-md-8 col-lg-6">
        <h3>Register</h3>
        <p class="text-black-50 mb-4">Create an account</p>
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
            <button class="w-100 btn btn-primary" type="submit">Register</button>
          </div>
        </form>

        <p class="text-center text-black-50">Already have account? <a href="/login">Login</a></p>
      </div>
    </div>
@endsection