<nav class="navbar navbar-expand-md fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="/">Deval Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav fw-semibold w-100">
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'home') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'blog') ? 'active' : '' }}" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'categories') ? 'active' : '' }}" href="/blog/categories">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'about') ? 'active' : '' }}" href="/about">About</a>
        </li>
        @auth
          <li class="nav-item dropdown ms-auto">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item text-danger">Logout</button>
                </form>
              </li>
            </ul>
          </li>    
        @endauth
      </ul>
      @guest
        <a href="/login" class="col-12 col-md-auto d-inline-block text-center my-2 ms-auto text-decoration-none fw-semibold text-black-50 btn-login">Login</a>
        <a href="/register" class="ms-md-3 btn btn-register fw-semibold text-decoration-none col-12 col-md-auto">Register</a>
      @endguest
    </div>
  </div>
</nav>