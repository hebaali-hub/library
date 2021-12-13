@extends('layout')
@section('title')
all list
@endsection
@section('content')

  <h1>All Books</h1>
@foreach ($cats as $cat)
<h3> <a href="{{url('/categories/show',$cat->id)}}">{{$cat->name}}</a></h3>


<p>{{$cat->name}}</p>
<a class="btn btn-primary" href="{{route('categories.show',$cat->id)}}">show</a>
<a class="btn btn-secondary" href="{{route('categories.updatefm',$cat->id)}}">edit</a>
<a class="btn btn-danger" href="{{route('categories.delete',$cat->id)}}">delete</a>
<h3> <a href="{{route('categories.show',$cat->id)}}">{{$cat->name}}</a></h3>

@endforeach
<br>

 <a class="btn btn-success" href="{{route('categories.create')}}">create</a> 

@endsection
