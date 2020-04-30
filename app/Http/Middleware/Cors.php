<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorizations');
    }
    // public function handle($request, Closure $next)
    // {

    //     header("Access-Control-Allow-Origin: *");

    //     // ALLOW OPTIONS METHOD
    //     $headers = [
    //         'Access-Control-Allow-Methods'=> '*',
    //         'Access-Control-Allow-Credentials'=> 'true',
    //         'Access-Control-Allow-Headers'=> 'GET, POST, PUT, DELETE, OPTIONS'
    //     ];
    //     if($request->getMethod() == "OPTIONS") {
    //         // The client-side application can set only headers allowed in Access-Control-Allow-Headers
    //         return Response::make('OK', 200, $headers);
    //     }

    //     $response = $next($request);
    //     foreach($headers as $key => $value)
    //         $response->header($key, $value);
    //     return $response;
    // }
}