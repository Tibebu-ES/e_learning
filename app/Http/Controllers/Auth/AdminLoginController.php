<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\Response;


class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }

    public function login(Request $request){

        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        $credentials = [
            'email'=> $request->email,
            'password' => $request->password,
        ];

        $remember = $request->remember;

        // remember session and return true
        if(Auth::guard('admin')->attempt($credentials,$remember)){
            return redirect()->intended(route('admin.dashboard'));
        }

        return  redirect()->back()->withInput($request->only('email','remember'));
    }




    public function logout(Request $request)
    {

        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
        }

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('admin.login'));
    }

}
