<?php

// app/Http/Middleware/CheckAdminRole.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and has the admin role
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // Redirect or handle unauthorized access as needed
        return redirect('/home')->with('error', 'Unauthorized access.');
    }
}

