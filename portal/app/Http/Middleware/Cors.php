<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    public function handle($request, Closure $next)
    {
        // Preflight OPTIONS request ka seedha jawab do
        if ($request->isMethod('OPTIONS')) {
            return response('', 200)
                ->header('Access-Control-Allow-Origin',      '*')
                ->header('Access-Control-Allow-Methods',     'GET, POST, PUT, DELETE, OPTIONS')
                ->header('Access-Control-Allow-Headers',     'Content-Type, Accept, Authorization, X-CSRF-TOKEN, X-Requested-With')
                ->header('Access-Control-Allow-Credentials', 'true');
        }

        $response = $next($request);

        return $response
            ->header('Access-Control-Allow-Origin',      '*')
            ->header('Access-Control-Allow-Methods',     'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers',     'Content-Type, Accept, Authorization, X-CSRF-TOKEN, X-Requested-With')
            ->header('Access-Control-Allow-Credentials', 'true');
    }
}