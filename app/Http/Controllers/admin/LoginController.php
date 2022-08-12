<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halamanLogin() {
        return view('admin.pages.login.login');
    }

    public function authenticate (Request $request) {
        $credentials = $request -> validate ([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request -> session() -> regenerate();
            return redirect() -> intended('admin/dashboard');
        }

        return back() -> with('loginError', 'Login Failed');

    }

    public function logout (Request $request) {
        Auth::logout();
        
        $request -> session() -> invalidate();

        $request -> session() -> regenerateToken();

        return redirect('/admin/login');
    }
}
