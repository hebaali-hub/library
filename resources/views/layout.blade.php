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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        {{-- @auth --}}
           <li class="nav-item">
          <a class="nav-link" href="{{route('books.index')}}">book</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="{{route('categories.index')}}">category</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="{{route('auth.logout')}}">Logout</a>
        </li>
        {{-- @endauth --}}
{{-- @guest --}}
        <li class="nav-item">
          <a class="nav-link" href="{{route('auth.reg')}}">Register</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="{{route('auth.login')}}">Login</a>
        </li>
{{-- @endguest --}}



      </ul>

    </div>
  </div>
</nav>
  <div class="container pt-5">
@yield('content')
</div>

<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
@yield('script')
</body>
</html>

