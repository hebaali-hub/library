<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;
class NoteController extends Controller
{
    //
    public function create(){
        return view('notes.create');
    }
    public function store(Request $request){
        $request->validate([
            'content' => 'required|string',
        ]);
        //validate

        $note = new Note();
        $note->content=$request->content;
        $note->user_id = Auth::user()->id;
        $note->save();
        return redirect(route('books.index'));

    }
}
