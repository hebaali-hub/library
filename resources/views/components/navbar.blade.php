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
          <a class="nav-link" href="{{route('books.index')}}">@lang('site.books')</a>
        </li>
          {{-- <li class="nav-item">
          <a class="nav-link" href="{{route('categories.index')}}">category</a>
        </li> --}}

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
   @lang('site.cats')
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
@foreach ($cats as $cat)
  <li><a class="dropdown-item" href="#">{{$cat->name}}</a></li>
@endforeach
  </ul>
</div>
  {{-- lang --}}
  <div class="dropdown">
   <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
  choose
  </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">

  <li><a class="dropdown-item" href="{{route('lang.ar')}}">ar</a></li>
  <li><a class="dropdown-item" href="{{route('lang.en')}}">en</a></li>

  </ul>
</div>
          <li class="nav-item">
          <a class="nav-link" href="{{route('auth.logout')}}">@lang('site.logout')</a>
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

