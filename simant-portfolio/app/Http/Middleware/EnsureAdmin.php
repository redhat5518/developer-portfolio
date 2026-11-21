<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureAdmin
{
    public function handle(Request $request, Closure $next): mixed
    {
        if ($request->user()?->email !== config('admin.email')) {
            abort(403, 'You are not authorized to access this area.');
        }

        return $next($request);
    }
}
