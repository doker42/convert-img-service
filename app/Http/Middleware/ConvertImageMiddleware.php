<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ConvertImageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $secret = $request->header('X-Secret');

        if ($secret && $secret === env('IMG_CONVERT_SERVICE_SECRET')) {

            return $next($request);
        }

        return response()->json([
            'message' => 'Incorrect request',
        ], 404);
    }
}
