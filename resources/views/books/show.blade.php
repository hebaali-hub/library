@extends('layout')
@section('title')
abook{{$book->title}}
@endsection
@section('content')
<div class="container">
<h1>{{$book->id}} </h1>

<h3> {{$book->title}} </h3>
<p> {{$book->desc}} </p>
<a class="btn btn-primary" href="{{route('books.show',$book->id)}}">show</a>
<a class="btn btn-secondary" href="{{route('books.updatefm',$book->id)}}">edit</a>
<a class="btn btn-danger" href="{{route('books.delete',$book->id)}}">delete</a>
<br>
{{-- //by route --}}
{{-- <a href="{{url('/books')}}">back</a> --}}
{{-- //by name route --}}
<a class="btn btn-success mt-5" href="{{route('books.index')}}">back</a>
</div>
@endsection
