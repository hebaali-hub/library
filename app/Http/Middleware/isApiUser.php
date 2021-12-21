<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
class isApiUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // $token=$request->access_token;
        if($request->has('access_token')){
            if ($request->access_token !==null) {
                $user=User::where('access_token', $request->access_token)->first();
                if($user!==null){
                    return $next($request);
                } else {
                    response()->json('not user in DB');
                }
            } else {
                response()->json('access_token empty');
            }

        }
        else{
            response()->json('not access_token attribute');
        }


    }
}