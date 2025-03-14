<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return response()->json(['message' => "Bạn chưa đăng nhập!"], 401);
        }
        if (!Auth::check() || Auth::user()->role !== $role) {
            return response()->json(['message' => "Không có quyền truy cập"], 403);
        }
        return $next($request);
    }
}
