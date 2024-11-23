<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectRegister
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
        return $request->wantsJson()
            ? new Response('', 201)
            : redirect(config('fortify.registered'));

        return $next($request);
    }
}
