<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Allow only the configured administrator email.
        if ($credentials['email'] !== config('admin.email')) {
            return back()
                ->withErrors(['email' => 'Invalid admin credentials.'])
                ->onlyInput('email');
        }

        // Check whether this email and IP have exceeded the limit.
        $key = 'admin-login:' . strtolower($credentials['email']) . '|' . $request->ip();

        if (\Illuminate\Support\Facades\RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = \Illuminate\Support\Facades\RateLimiter::availableIn($key);

            return back()
                ->withErrors([
                    'email' => "Too many login attempts. Please try again in {$seconds} seconds."
                ])
                ->onlyInput('email');
        }

        if (Auth::attempt($credentials)) {

            // Clear failed attempts after successful login.
            \Illuminate\Support\Facades\RateLimiter::clear($key);

            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        }

        // Record a failed login attempt.
        \Illuminate\Support\Facades\RateLimiter::hit($key, 60);

        return back()
            ->withErrors(['email' => 'Invalid admin credentials.'])
            ->onlyInput('email');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}