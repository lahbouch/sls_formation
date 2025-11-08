<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\URL;

class FixStorageUrls
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Ensure asset URLs are generated with the correct APP_URL including port
        $appUrl = env('APP_URL') ?: 'http://127.0.0.1';
        
        URL::forceRootUrl($appUrl);

        $response = $next($request);

        // Add CORS headers for storage files
        if ($request->is('storage/*')) {
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set('Access-Control-Allow-Methods', 'GET, OPTIONS');
            $response->headers->set('Access-Control-Allow-Headers', 'Content-Type');
        }

        return $response;
    }
}

