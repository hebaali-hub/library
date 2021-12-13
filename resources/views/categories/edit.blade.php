@extends('layout')
@section('title')
form edit category
@endsection
@section('content')
@include('inc.errors')
<form method="POST" action="{{url('/categories/update',$cat->id)}}">
@csrf

  <div class="mb-3">

    <input type="text" class="form-control" placeholder="category name" name="name" value="{{old('name') ?? $cat->name}}">

  </div>

  <button type="submit" class="btn btn-primary">edit category</button>

</form>
@endsection
