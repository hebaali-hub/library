<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
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
      public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user_github = Socialite::driver('github')->user();
        // dd($user);
        // $user->token;
        $db_user=User::where('email','=',$user_github->email)->first();
        if($db_user==null){
            $reg_user=User::create([
                'email'=>$user_github->email,
                'name'=>$user_github->nickname,
                'password'=>Hash::make('123456'),
                'oauth_token'=>$user_github->token,
            ]);
            Auth::login($reg_user);
        }
        else{
            Auth::login($db_user);
        }
 return redirect(route('books.index'));
    }
}