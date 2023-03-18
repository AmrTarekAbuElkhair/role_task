<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login_form()
    {
        return view('login');
    }

    public function login(Request $request){
 
        $user=User::where('email',$request->email)->first();
        if(!$user){
            return redirect()->route('login')->with('error','البريد الاكتروني أو كلمة السر غير صحيحة');
        }else{
        $check = Hash::check($request->password, $user->password);
        if ($check) {
            if ($user->hasRole('admin')) {
                return redirect()->route('dashboard.index');
            } else {
                return redirect()->route('user.index');
            }
        }
    }
    }

    public function dashboard()
    {
        return view('admin');
    }    

    public function user()
    {
        return view('user');
    }  
}
