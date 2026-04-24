<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $response = redirect()->intended(route('home', absolute: false));

        // If "Ingat saya" is checked, create cookie with 30-days duration
        if ($request->boolean('remember')) {
            $user = Auth::user();
            $rememberCookieName = Auth::getRecallerName();

            // Cookie value format: id|remember_token|password_hash
            $rememberCookieValue = $user->getAuthIdentifier()
                . '|' . $user->getRememberToken()
                . '|' . $user->getAuthPassword();
            
            $response->cookie(
                $rememberCookieName,
                $rememberCookieValue,
                60 * 24 * 30, // 30 days in minutes
                config('session.path'),
                config('session.domain'),
                config('session.secure'),
                true, // httpOnly
                false,
                config('session.same_site', 'lax')
            );
        }

        return $response;
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
