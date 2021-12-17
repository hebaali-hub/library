@extends('layout')
@section('title')
form add book
@endsection
@section('content')
@include('inc.errors')
<form method="POST" action="{{url('/books/store')}}" enctype="multipart/form-data">


@csrf
  <div class="mb-3">

    <input type="text" class="form-control" placeholder="book name" name="title" value={{old('title')}}>

  </div>
  <div class="mb-3">

    <textarea class="form-control" placeholder="Description" name="desc" row="3">{{old('desc')}}</textarea>
  </div>
 <div class="mb-3">

    <input type="file" class="form-control" name="img">

  </div>
select categories
  @foreach ($categories as $cat)
   <div class="form-check">
<input class="form-check-input" type="checkbox" name="categories_ids[]" value="{{$cat->id}}" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
   {{$cat->name}}
  </label>
  </div>
  @endforeach



  <button type="submit" class="btn btn-primary">add book</button>

</form>
@endsection
