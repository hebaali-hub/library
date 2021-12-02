@extends('layout')
@section('title')
all list
@endsection
@section('content')

  <h1>All Books</h1>
@foreach ($book_list as $book)
<hr>
<h3> <a href="{{url('/books/show',$book->id)}}">{{$book->title}}</a></h3>
<a class="btn btn-primary" href="{{route('books.show',$book->id)}}">show</a>
<a class="btn btn-secondary" href="{{route('books.updatefm',$book->id)}}">edit</a>
<a class="btn btn-danger" href="{{route('books.delete',$book->id)}}">delete</a>
{{-- <h3> <a href="{{route('books.show',$book->id)}}">{{$book->title}}</a></h3> --}}
<p>{{$book->desc}}</p>
@endforeach

{{ $book_list->render() }}
<a class="btn btn-success" href="{{route('books.create')}}">add</a>
@endsection
