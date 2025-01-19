<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // بررسی نقش کاربر
        if ($request->user() && $request->user()->role !== $role) {
            return redirect('home'); // هدایت به صفحه خانه اگر نقش درست نباشد
        }
        
        return $next($request);
    }
}
