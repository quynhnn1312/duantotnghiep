<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{

    public function loginForm(){
        Auth::guard('admin')->logout();
        Auth::guard('teacher')->logout();
        Auth::guard('student')->logout();
        return view('auth.login');
    }
	
    public function authenticate(Request $request) {
        $credentials = $request->only('email', 'password');
        if(Auth::guard($request->role)->attempt($credentials)) {
            return redirect()->route($request->role.'.index');
        }else{
            return back()->withInput();
        }
    }
}
