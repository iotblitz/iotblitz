<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthClass extends Controller
{
    function login(Request $r): View | RedirectResponse
    {
        if($r->isMethod('post'))
        {
            $rules = [
                'email' => 'required|email',
                'password' => 'required'
            ];
            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                return redirect()->route('admin.login')->withErrors($valaditor)->withInput();
            }
            if(Auth::guard('admin')->attempt(['email' => $r->email, 'password' => $r->password])){
                return redirect()->route('super_admin.dashboard');
            }else{
                return redirect()->route('admin.login')->with('error', 'Invalid email or password');
            }

        }else{
            return view('admin.auth.login');
        }
    }


    function register(Request $r):View|RedirectResponse
    {
        if($r->isMethod('post'))
        {
            $rules = [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6'
            ];
            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                return redirect()->route('admin.register')->withErrors($valaditor)->withInput();
            }
            $user = User::create([
                'name' => $r->name,
                'email' => $r->email,
                'password' => Hash::make($r->password),
                'user_type' => 'SA',
                'otp' => rand(100000, 999999),
                'otp_status'=>'A',
                'active_status' => 'A',
                'mobile' => "1234567890",
                'created_by' => 0
            ]);

            return redirect()->route('admin.login')->with('success', 'User created successfully');
        }else{
            return view('admin.auth.register');
        }
    }


    function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
