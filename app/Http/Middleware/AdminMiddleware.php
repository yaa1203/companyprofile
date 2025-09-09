<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('is_admin') || session('is_admin') !== true) {
            return redirect('/admin/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        return $next($request);
    }
}
