<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authenticated
{
    public function handle(Request $request, Closure $next, $guard, $role)
    {

        if($guard == "all" && (auth("provider")->check() || auth("workshop")->check()))
            return $next($request);
            
        if(auth($guard)->check())
            return $next($request);

        return response()->json([
            'error' => 'forbidden'
        ],201);
    }
}
