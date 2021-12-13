@extends('layout')
@section('title')
form add category
@endsection
@section('content')
@include('inc.errors')
<form method="POST" action="{{url('/categories/store')}}" >


@csrf
  <div class="mb-3">

    <input type="text" class="form-control" placeholder="category name" name="name" value={{old('name')}}>

  </div>

  <button type="submit" class="btn btn-primary">add category</button>

</form>
@endsection
