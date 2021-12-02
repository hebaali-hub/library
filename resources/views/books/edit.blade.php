@extends('layout')
@section('title')
form add book
@endsection
@section('content')
<form method="POST" action="{{url('/books/update',$book->id)}}">
@csrf
  <div class="mb-3">

    <input type="text" class="form-control" placeholder="book name" name="title" value="{{$book->title}}">

  </div>
  <div class="mb-3">

    <textarea class="form-control" placeholder="Description" name="desc" row="3">{{$book->desc}}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">edit book</button>

</form>
@endsection
