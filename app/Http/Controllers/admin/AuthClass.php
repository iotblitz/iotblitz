<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\EmployeMail;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthClass extends Controller
{
    function login(Request $r): View | RedirectResponse
    {
        if ($r->isMethod('post')) {
            $rules = [
                'email' => 'required|email',
                'password' => 'required'
            ];
            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                return redirect()->route('admin.login')->withErrors($valaditor)->withInput();
            }

            // User::where('email', $r->email)->fast();
            if (Auth::guard('admin')->attempt(['email' => $r->email, 'password' => $r->password])) {
                return redirect()->route('super_admin.dashboard');
            } else {
                return redirect()->route('admin.login')->with('error', 'Invalid email or password');
            }
        } else {
            return view('admin.auth.login');
        }
    }


    function register(Request $r): View|RedirectResponse
    {
        if ($r->isMethod('post')) {
            $rules = [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6',
                'confirmPassword' => 'required|same:password',
                'role'=>'required'
            ];
            $valaditor = Validator::make($r->all(), $rules);
            if ($valaditor->fails()) {
                return redirect()->route('admin.register')->withErrors($valaditor)->withInput();
            }


            if ($r->hasFile('blogimage')) {
                $rules = [
                    'blogimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',

                ];

                $valaditor = Validator::make($r->all(), $rules);
                if ($valaditor->fails()) {
                    return response()->json($valaditor->errors(), 200);
                }

                // $oldimagepath = public_path('profile/' . $r->input('blogimage'));
                // if (File::exists($oldimagepath)) {
                //     File::delete($oldimagepath);
                // }
                $image = $r->file('blogimage');
                $imageName = time() . '.' . $image->extension();
                $image->move(public_path('profile'), $imageName);

                $user = User::create([
                    'name' => $r->name,
                    'email' => $r->email,
                    'password' => Hash::make($r->password),
                    'user_type' => $r->role,
                    'otp' => rand(100000, 999999),
                    'otp_status' => 'A',
                    'active_status' => 'A',
                    'mobile' => "1234567890",
                    'dp' => $imageName,
                    'created_by' => 0
                ]);
            } else {
                $user = User::create([
                    'name' => $r->name,
                    'email' => $r->email,
                    'password' => Hash::make($r->password),
                    'user_type' => $r->role,
                    'otp' => rand(100000, 999999),
                    'otp_status' => 'A',
                    'active_status' => 'A',
                    'mobile' => "1234567890",
                    'created_by' => 0
                ]);
            }



            $data25 = [
                'name' => $r->name,
                'email' => $r->email,
                'employee_id' => $user->id,
                'password' => $r->password,
                'user_type'=> $r->role,
                // Add other data you want to pass to the email
            ];

            Mail::to($r->email)->send(new EmployeMail($data25));

            return redirect()->route('employee.register')->with('success', 'User created successfully');
        } else {
            return view('admin.auth.register');
        }
    }


    function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
