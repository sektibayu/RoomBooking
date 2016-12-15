<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->input('username') == "admin" && $request->input('password')=="admin"){
            return redirect('admin');
        }else{
            return response("maaf anda salah",401);
        }
        return $next($request);
    }
}
