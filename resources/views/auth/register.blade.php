@extends('layout')
@section('title')
register form
@endsection
@section('content')
@include('inc.errors')
<form method="POST" action="{{route('auth.handlereg')}}" >


@csrf
  <div class="mb-3">

    <input type="text" class="form-control" placeholder="name" name="name">

  </div>
  <div class="mb-3">

    <input type="email" class="form-control" placeholder="email" name="email">
  </div>
 <div class="mb-3">
    <input type="password" class="form-control" placeholder="password" name="password">


  </div>
  <button type="submit" class="btn btn-primary">register</button>

</form>
  <a class="btn btn-primary" href="{{ route('auth.github.redirect')}}">login github</a>

@endsection
