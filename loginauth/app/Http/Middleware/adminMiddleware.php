<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Session::has('admin')){
            return redirect('/adminlogin');
        }
        //return $next($request);

        //code fore priventing browserback

        $response = $next($request);

        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')

            ->header('Pragma','no-cache')

            ->header('Expires','Sat, 02 Jul 1997 00:00:00 GMT');
    }
}
