<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title>Deval Blog - {{ $title }}</title>
</head>
<body style="font-size: 18px">
  
  @if ($active !== 'auth')
    @include('partials.navbar')
  @endif

  <div class="container {{ $active === 'auth' ? '' : 'pt-5 mt-4' }}">
    @yield('content')
  </div>

  <script src="/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>