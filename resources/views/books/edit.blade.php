@extends('layout')
@section('title')
form add book
@endsection
@section('content')
@include('inc.errors')
<form method="POST" action="{{url('/books/update',$book->id)}}" enctype="multipart/form-data">
@csrf
<img src='{{ asset("uploads/books/$book->img") }}' alt="">
  <div class="mb-3">

    <input type="text" class="form-control" placeholder="book name" name="title" value="{{old('title') ?? $book->title}}">

  </div>
  <div class="mb-3">

    <textarea class="form-control" placeholder="Description" name="desc" row="3">{{ old('desc') ?? $book->desc}}</textarea>
  </div>
 <div class="mb-3">

    <input type="file" class="form-control" name="img">

  </div>
  <button type="submit" class="btn btn-primary">edit book</button>

</form>
@endsection
