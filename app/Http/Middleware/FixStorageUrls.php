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
        $appUrl = env('APP_URL') ?: 'http://localhost:8000';
        
        // If APP_URL doesn't include a port number and we're on localhost, add :8000
        if (str_contains($appUrl, 'localhost') && !preg_match('/localhost:\d+/', $appUrl)) {
            $appUrl = str_replace('http://localhost', 'http://localhost:8000', $appUrl);
            $appUrl = str_replace('https://localhost', 'https://localhost:8000', $appUrl);
        } elseif (str_contains($appUrl, '127.0.0.1') && !preg_match('/127\.0\.0\.1:\d+/', $appUrl)) {
            $appUrl = str_replace('http://127.0.0.1', 'http://127.0.0.1:8000', $appUrl);
            $appUrl = str_replace('https://127.0.0.1', 'https://127.0.0.1:8000', $appUrl);
        }
        
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

