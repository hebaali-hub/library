<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;
class ApiBookController extends Controller
{

    public function index(){
    $book=Book::get();
    return response()->json($book);}

     public function show($id){
        $book = Book::with('category')->findOrFail($id);
        return response()->json($book);
    }
     public function store(Request $req){
         $validator = Validator::make($req->all(), [
               'title'=>'required|string|max:100',
                'desc'=>'required|string|max:200',
                'img'=>'required',
                'categories_ids'=>'required',
                'categories_ids.*' => 'exists:categories,id',

        ]);

        if ($validator->fails()) {
           $errors=$validator->errors();
           return response()->json($errors);
        }



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
        $success='ok insert';
            return response()->json($success);
        }
  public function update(Request $req, $id)
    {
        //validate

           $validator = Validator::make($req->all(), [
                'title'=>'required|string|max:100',
                'desc'=>'required|string|max:200',
                 'img' => 'nullable',
                'categories_ids'=>'required',
                'categories_ids.*' => 'exists:categories,id',

        ]);

        if ($validator->fails()) {
           $errors=$validator->errors();
           return response()->json($errors);
        }

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
     $book->category()->sync($req->categories_ids);
        //upload img
        $book->save();
        $success='ok update';
        return response()->json($success);}

      public function delete($id)
    {
        $book = Book::find($id);
        if($book->img!==null){
            unlink(public_path('uploads/books/').$book->img);
        }
         $book->category()->sync([]);
        $book->delete();
      $success='ok delete';
        return response()->json($success);}


}