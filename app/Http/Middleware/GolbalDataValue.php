<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Category;

class GolbalDataValue
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
        //midleware untuk mendapatkan data global
        //data global disini adalah data yang di gunkna untuk sebagian besar views
        $categoryList = Category::all(['name']);
        // $request['categoryList'] = $categoryList;
        session(['categoryList' => $categoryList]);

        return $next($request);
    }
}
