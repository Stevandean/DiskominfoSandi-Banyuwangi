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
        return back()->with('loginError', 'Login Failed');
    }

    public function logout (Request $request) {
        Auth::logout();
        $request -> session() -> invalidate();
        $request -> session() -> regenerateToken();
        return redirect('/admin/login');
    }


    // public function authenticate (Request $request) {
    //     $token_jwt = $request -> validate ([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);
    //     if (Auth::attempt($token_jwt)) {
    //         $request->session()->regenerate();
    //         $request->session()->put('token', $token_jwt);
    //         return response()->json(['user' => auth()->user(),'success' => true]);
    //         // return redirect() -> intended('admin/dashboard');
    //     }
    //     // return back()->with('loginError', 'Login Failed');
    //     return response()->json(['login telah gagal']);
    // }


    // public function logout(Request $request)
    // {
    //  // Invalidate the token
    //  try {
    //     JWTAuth::invalidate(JWTAuth::getToken());
    //     auth()->logout();
    //     $request -> session() -> invalidate();
    //     $request -> session() -> regenerateToken();
    //      return response()->json([
    //          "status" => "success", 
    //          "message"=> "User successfully logged out."
    //      ]);
    //  } catch (JWTException $e) {
    //      // something went wrong whilst attempting to encode the token
    //      return response()->json([
    //      "status" => "error", 
    //      "message" => "Failed to logout, please try again."
    //      ], 500);
    //  }
    // }
    
}
