<?php

namespace App\Http\Middleware;

use Closure;

class EnableCrossRequestMiddleware
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
        $response = $next($request);
        header('Access-Control-Allow-Origin: *');

        header("Access-Control-Allow-Credentials: true");

        header("Access-Control-Allow-Methods: *");

        header("Access-Control-Allow-Headers: Content-Type,Access-Token");

        header("Access-Control-Expose-Headers: *");

        return $response;
    }
}
