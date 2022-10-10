<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //cek token, apakah user token benar
        $user = auth()->user();
        // if(!$user){
        //     return route('login');
        // }

        //set token baru setiap request
        $newToken = auth()->refresh();
        $request->session()->put('token', $newToken);

        return $next($request);
    }
}
