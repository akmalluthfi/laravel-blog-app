<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <title>Deval Blog | {{ $title }}</title>
</head>
<body>
  
  @include('partials.navbar')

  <div class="container mt-4">
    @yield('content')
  </div>

  <script src="/assets/js/bootstrap.min.js"></script>

</body>
</html>