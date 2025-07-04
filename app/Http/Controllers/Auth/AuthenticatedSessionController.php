<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

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

        // Get the authenticated user
        $user = $request->user();


        switch($user->role_id){
            case 1:
                // return redirect()->intended(RouteServiceProvider::USER_HOME);
                Alert::success('Welcome user', 'Customer Satisfaction System');
                return redirect('/user/dashboard');
            break;

            case 2:
                // return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
                Alert::success('Welcome admin', 'Customer Satisfaction System');
                return redirect('/admin/dashboard');
            break;

            case 3:
                // return redirect()->intended(RouteServiceProvider::SUPER_ADMIN_HOME);
                Alert::success('Welcome user', 'Customer Satisfaction System');
                return redirect('/super-admin/dashboard');
            break;
        }

        
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
