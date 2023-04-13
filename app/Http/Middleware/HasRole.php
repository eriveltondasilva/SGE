<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (auth()->user()->role === $role) {
            return $next($request);
        }
        return redirect()->route('dashboard')
            ->with('msg', 'Seu acesso não foi autorizado! Entre em contado com sua escola.');
    }
}
