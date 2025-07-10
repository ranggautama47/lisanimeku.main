<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        // Role bisa 0 (user) atau 1 (admin)
        if ($user->role != $role) {
            abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}
