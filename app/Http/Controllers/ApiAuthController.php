<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class ApiAuthController extends Controller
{
    //
    public function handlereg(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'password' => 'required|string|max:50|min:5',


        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->access_token=Str::random('64');
        $user->save();
        // Auth::login($user);

        $success = 'sucess register';
        return response()->json($user->access_token);
    }
    public function handlelog(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:100',
            'password' => 'required|string|max:50|min:5',


        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json($errors);
        }

        $isuser = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if ($isuser==null) {
          $error="not register";
            return response()->json($error);
        } else {
             $user=User::where('email' ,'=',$request->email)->first();
            $user_new_token= Str::random('64');
            $user->update([
                'access_token'=> $user_new_token
            ]);
            return response()->json($user->access_token);
        }
    }
    public function logout(Request $req)
    {
        $access_token=$req->access_token;

        $user=User::where('access_token','=', $access_token)->first();
        if($user==null){
            $error = 'token not correct';
            return response()->json($error);
        }
        else{
            $user->update([
                'access_token' => null,
            ]);
            $success = 'sucess logout';
            return response()->json($success);

        }
    }
}