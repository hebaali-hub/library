@extends('layout')
@section('title')
form add book
@endsection
@section('content')
<form method="POST" action="{{url('/books/store')}}">
@csrf
  <div class="mb-3">
   
    <input type="text" class="form-control" placeholder="book name" name="title">

  </div>
  <div class="mb-3">
   
    <textarea class="form-control" placeholder="Description" name="desc" row="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">add book</button>
    
</form>
@endsection
