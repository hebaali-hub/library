<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
</head>
<body>
  <div class="container pt-5">
@yield('content')
</div>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

</body>
</html>

