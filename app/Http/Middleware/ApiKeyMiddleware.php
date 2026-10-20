<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiKeyMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');
        $request->headers->set('Content-Type', 'application/json');

        $apiKey = $request->header('X-Api-Key');

        if ($apiKey !== config('services.minfin.api_key')) {
            return response()->json([
                'status' => 'ERROR',
                'error'  => 'Unauthorized. A valid API key is required to access this endpoint.',
            ], 401);
        }

        return $next($request);
    }
}
