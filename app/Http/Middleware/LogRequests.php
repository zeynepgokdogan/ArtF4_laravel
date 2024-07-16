<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogRequests
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
        // Request bilgilerini logla
        Log::info('Request:', [
            'url' => $request->url(),
            'method' => $request->method(),
            'params' => $request->all(),
            'headers' => $request->headers->all(),
        ]);

        return $next($request);
    }
}
