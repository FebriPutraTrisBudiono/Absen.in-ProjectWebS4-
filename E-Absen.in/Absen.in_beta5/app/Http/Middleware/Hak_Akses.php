<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Hak_Akses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$hak_akses)
    {
        if (in_array($request->user()->hak_akses, $hak_akses)) {
            return $next($request);
        }
        return redirect('/dashboard');
    }
}
