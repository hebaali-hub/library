<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }
    public function handlereg(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:100',
            'email'=> 'required|email|max:100',
            'password'=> 'required|string|max:50|min:5',
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->email = $request->email;
        $user->password =Hash::make($request->password);
        $user->save();
        Auth::login($user);
        return redirect(route('books.index'));
    }
    public function login()
    {
        return view('auth.login');
    }
    public function handlelog(Request $request){
        $request->validate([

            'email' => 'required|email|max:100',
            'password' => 'required|string|max:50|min:5',
        ]);
        $is_login=Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        if(! $is_login){
            return back();
        }
        else{
            return redirect(route('books.index'));
        }
    }
    public function logout(){
        Auth::logout();
    }
}