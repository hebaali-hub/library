@extends('layout')
@section('title')
abook{{$cats->name}}
@endsection
@section('content')
<div class="container">
<h1>{{$cats->id}} </h1>

<h3> {{$cats->name}} </h3>

<br>
<ul>
    @foreach ($cats->book as $book)
    <li><p> {{$book->title}}</p></li>
     @endforeach
</ul>
<a class="btn btn-success mt-5" href="{{route('categories.index')}}">back</a>
</div>
@endsection
