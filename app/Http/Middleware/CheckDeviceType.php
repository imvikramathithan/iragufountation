<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckDeviceType
{
    public function handle(Request $request, Closure $next)
    {
        // Check the User-Agent header
        $agent = $request->header('User-Agent');

        // Block mobile devices
        if (preg_match('/Mobile|Android|iP(hone|ad)/i', $agent)) {
            abort(403, 'This route is accessible only on laptops and desktops.');
        }

        return $next($request);
    }
}
