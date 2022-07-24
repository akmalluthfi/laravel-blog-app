<nav class="navbar navbar-expand-md bg-light">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">Deval Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav fw-semibold">
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
      </ul>
      <a href="/login" class="ms-md-auto mb-2 mb-md-0 btn btn-login fw-semibold text-decoration-none col-12 col-md-auto">Login</a>
      <a href="/register" class="ms-md-2 btn btn-register fw-semibold text-decoration-none col-12 col-md-auto">Register</a>
    </div>
  </div>
</nav>