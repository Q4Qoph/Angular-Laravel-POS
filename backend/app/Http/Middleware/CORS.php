<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CORS
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        header('Acess-Control-Allow-Methods:GET,POST,PATCH,PUT,DELETE,OPTIONS');
        header('Access-Control-Allow-Headers:Origin, Content-Type, X-Auth-Token,Authorization, Accept,charset,boundary,Content-Length');
        header('Access-Control-Allow-Origin: *');
        return $next($request);
    }
}
