<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyJsonContentType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next): Response
    {
        if (!$request->expectsJson()) {
            abort(403, 'Forbidden');
        }
        
        $userAgent = $request->header('User-Agent');
        if (!$this->isBrowser($userAgent)) {
            abort(403, 'Forbidden');
        }

        return $next($request);
    }

    /**
     * Check if the user agent string belongs to a legitimate browser.
     *
     * @param string $userAgent
     * @return bool
     */
    private function isBrowser($userAgent)
    {

        $browsers = [
            'Mozilla', 
            'AppleWebKit', 
            'Chrome', 
            'Safari', 
            'Trident',
            'Edge', 
            'Opera', 
        ];

        foreach ($browsers as $browser) {
            if (stripos($userAgent, $browser) !== false) {
                return true;
            }
        }

        return false;
    }
}
