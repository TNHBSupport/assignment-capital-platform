<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    private const USERNAME = 'admin';
    private const PASSWORD = 'admin123';

    public function showLogin()
    {
        return view('pages.admin-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if ($request->input('username') === self::USERNAME && $request->input('password') === self::PASSWORD) {
            $request->session()->put('temp_admin_authed', true);
            $request->session()->regenerate();

            return redirect()->route('applications.index');
        }

        return back()->withErrors(['username' => 'Invalid credentials.'])->withInput();
    }

    public function logout(Request $request)
    {
        $request->session()->forget('temp_admin_authed');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
