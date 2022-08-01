<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard Template · Bootstrap v5.1</title>

  <!-- Bootstrap core CSS -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

  <style>
      .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
      }

      @media (min-width: 768px) {
          .bd-placeholder-img-lg {
              font-size: 3.5rem;
          }
      }
  </style>

  <!-- Custom styles for this template -->
  <link href="/assets/css/dashboard.css" rel="stylesheet" />
</head>
<body>

  @include('dashboard.partials.header')

  <div class="container-fluid">
      <div class="row">
        @include('dashboard.partials.navbar')
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('content')
        </main>
    </div>
  </div>

  <script src="/assets/js/bootstrap.bundle.min.js"></script>

  <script
      src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
      integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
      crossorigin="anonymous"
  ></script>

  <script src="/assets/js/dashboard.js"></script>
</body>
</html>