<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $user = Auth::user();
        if( !$user || $user->role->nombre != $role ){
            return redirect()->back()->with('Unauthorized', 'La ruta solicitada no está disponible para su rol');
            // abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}
