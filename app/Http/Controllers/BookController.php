<?php

namespace App\Http\Controllers;
use App\Models\Book;//Book model
use Illuminate\Http\Request;
use App\Models\Category;
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
            $categories=Category::select('id','name')->get();
            return view('books/create', ['categories' => $categories]);
        }
        public function store(Request $req){

            //validate
            $req->validate([
                'title'=>'required|string|max:100',
                'desc'=>'required|string|max:200',
                'img'=>'required',
                'categories_ids'=>'required',
                'categories_ids.*' => 'exists:categories,id',
            ]);
           // dd($req->all());
            //validate
            //upload img
           $img= $req->file('img');//all info
           $ext=$img->getClientOriginalExtension();//get extension
           $new_nm_img='book_'.uniqid().".$ext";//create new name
           $img->move(public_path('uploads/books'),$new_nm_img);

            //upload img
           $book=Book::create([
            'title'=>$req->title,
            'desc'=>$req->desc,
            'img'=>$new_nm_img,
           ]);
           
           $book->category()->sync($req->categories_ids);
        
            return redirect(route('books.index'));
        }
//insert form
//update
        public function updatefm($id){
            $book=Book::findOrFail($id);
            $categories=Category::select('id','name')->get();
            return view('books.edit',['book'=> $book,'categories'=>$categories]);
        }
    public function update(Request $req, $id)
    {
        //validate
            $req->validate([
                'title'=>'required|string|max:100',
                'desc'=>'required|string|max:200',
                 'img' => 'nullable',
               'categories_ids'=>'required',
               'categories_ids.*' => 'exists:categories,id',
        ]);
        //validate
        $book = Book::findOrFail($id);
        $book->desc = $req->desc;
        $book->title = $req->title;

        //upload img
        if($req->hasFile('img')){
            unlink(public_path('uploads/books/').$book->img);
            $img = $req->file('img'); //all info
            $ext = $img->getClientOriginalExtension(); //get extension
            $new_nm_img = 'book_' . uniqid() . ".$ext"; //create new name
            $img->move(public_path('uploads/books'), $new_nm_img);
            $book->img=$new_nm_img;
        }

        //upload img

$book->category()->sync($req->categories_ids);

        $book->save();

        return redirect(route('books.index'));
    }
    //update
    //delete
    public function delete($id)
    {
        $book = Book::find($id);
        if($book->img!==null){
            unlink(public_path('uploads/books/').$book->img);
        }
        $book->category()->sync([]);
        $book->delete();
        return redirect(route('books.index'));
    }
     //delete



}