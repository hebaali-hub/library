@extends('layout')
@section('title')
form add book
@endsection
@section('content')
@include('inc.errors')
<form method="POST" action="{{route('notes.store')}}">


@csrf


 <div class="mb-3">

    <textarea class="form-control" name="content"></textarea>

  </div>
  <button type="submit" class="btn btn-primary">add note</button>

</form>
@endsection
