<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        //all data
        $cat = Category::get();
        return view('categories/index', ['cats' => $cat]);
    }
    public function show($id)
    {



        $cat = Category::findOrFail($id);
        return view('categories/show', ['cats' => $cat]);
    }
    //insert form
    public function create()
    {
        return view('categories/create');
    }
    public function store(Request $req)
    {

        //validate
        $req->validate([
            'name' => 'required|string|max:100',

        ]);
        //validate

        $cat = new Category();
        $cat->name = $req->name;
        $cat->save();
        return redirect(route('categories.index'));
    }
    //insert form
    //update
    public function updatefm($id)
    {
        $cat = Category::findOrFail($id);
        return view('categories.edit', ['cat' => $cat]);
    }
    public function update(Request $req, $id)
    {
        //validate
        $req->validate([
            'name' => 'required|string|max:100',

        ]);
        //validate
        $cat = Category::findOrFail($id);
        $cat->name = $req->name;
        $cat->save();
        return redirect(route('categories.index'));
    }
    //update
    //delete
    public function delete($id)
    {

        $cat = Category::find($id);

        $cat->delete();
        return redirect(route('categories.index'));
    }
}
