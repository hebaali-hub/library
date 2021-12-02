<?php

namespace App\Http\Controllers;
use App\Models\Book;//Book model
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index(){
        // return 'hello';
        //all data
         $book_list=Book::get();
        ////   dd($book_list);
        //all data

        //selected columns
        //// $book_list = Book::select('title','desc')->get();
        ////dd($book_list);
        //selected columns

        //where condition
        // $book_list = Book::where('id','>=',2)->get();
        //// $book_list = Book::select('title', 'desc')->where('id', '>=', 2)->orderBy('title',"DESC")->get();
        ////dd($book_list);
        //where condition

        // return view('books/index',compact('book_list'));
         $book_list=Book::OrderBy('title','desc')->paginate(2);
        return view('books/index', compact('book_list'));
    }
    public function show($id){

        // $book = Book::find($id);
        // $book = Book::where('id','=', $id)->first();

        $book = Book::findOrFail($id);
        return view('books/show',['book'=> $book]);
    }
//insert form
        public function create(){
            return view('books/create');
        }
        public function store(Request $req){
           $book=new Book();
           $book->desc= $req->desc;
           $book->title = $req->title;
           $book->save();
            return redirect(route('books.index'));
        }
//insert form
//update
        public function updatefm($id){
            $book=Book::findOrFail($id);
            return view('books.edit',['book'=> $book]);
        }
    public function update(Request $req, $id)
    {

        $book = Book::findOrFail($id);
        $book->desc = $req->desc;
        $book->title = $req->title;
        $book->save();
        return redirect(route('books.index'));
    }
    //update
    //delete
    public function delete($id)
    {

        $book = Book::find($id);
        $book->delete();
        return redirect(route('books.index'));
    }
     //delete

}