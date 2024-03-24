<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticateUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$user_type): Response
    {

        if(auth()->user()->user_type == $user_type){
            return $next($request);
        }
        // else if($user_type=='SA'){
        //     return redirect()->route('super_admin.dashboard');
        // }
        return redirect()->route('admin.login');

    }
}
