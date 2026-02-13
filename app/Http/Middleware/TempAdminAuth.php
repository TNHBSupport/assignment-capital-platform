<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TempAdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->get('temp_admin_authed') === true) {
            return $next($request);
        }

        return redirect()->route('admin.login')->with('error', 'Please sign in to access admin.');
    }
}
