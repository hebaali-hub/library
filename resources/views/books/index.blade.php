@extends('layout')
@section('title')
all list
@endsection
@section('content')
 <input type="text" id="keyword">
  <h1>All Books</h1>
  @auth
 your Notes
 {{-- {{Auth::user()->id}} --}}

  @foreach (Auth::user()->notes as $note)
        <p> {{ $note->content }}</p>

      @endforeach
      {{-- <a class="btn btn-primary" href="{{route('notes.create')}}">create notes</a> --}}
  @endauth
  {{-- <a class="btn btn-success" href="{{route('books.create')}}">create</a> --}}
<div id="allbooks">
  @foreach ($book_list as $book)
{{-- <hr> --}}
 {{-- <a href="{{url('/books/show',$book->id)}}"> --}}
    <h3>{{$book->title}}</h3>
{{-- </a> --}}
{{-- <img src='{{ asset("uploads/books/$book->img") }}' alt=""> --}}

<p>{{$book->desc}}</p>
{{-- <a class="btn btn-primary" href="{{route('books.show',$book->id)}}">show</a>
<a class="btn btn-secondary" href="{{route('books.updatefm',$book->id)}}">edit</a>
<a class="btn btn-danger" href="{{route('books.delete',$book->id)}}">delete</a> --}}
{{-- <h3> <a href="{{route('books.show',$book->id)}}">{{$book->title}}</a></h3> --}}

@endforeach
</div>
<br>
{{-- {{ $book_list->render() }} --}}


@endsection
@section('script')
<script>
    $('#keyword').keyup(function(){
        let keyword=$(this).val();
        // console.log(keyword);
        let url="{{route('books.search')}}"+"?keyword="+keyword;
        // console.log(url);
$.ajax(
{
    type:"GET",
    url:url,
    contentType: false,
    processData: false,
    success: function (data) {   // success callback function
        // console.log(data);
        $('#allbooks').empty();
        for(book of data){
        $('#allbooks').text();
          $('#allbooks').append(`<h3>${book.title}</h3><p>${book.desc}</p>`);
        }

    },

});
    });
</script>
@endsection
