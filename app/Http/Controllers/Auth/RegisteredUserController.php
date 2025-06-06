<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

use App\Models\User;

use RealRashid\SweetAlert\Facades\Alert;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View{

        $userCount = DB::table('users')->get()->count();
        $auth_profile = Auth::user();     

        if( $userCount <= 0 ){
            return view('auth.register');
        }else{            
            Alert::warning('Error', 'Not allowed at this time, see administrator');
            return view('layouts.error');
        }        

    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'min:7', 'confirmed', Rules\Password::defaults()],
        ]);

        $superAdminCount = DB::table('users')->select('role_id')->where('role_id', 3)->count();
        $userCount = DB::table('users')->get()->count();

        if( $userCount <= 0 ){
            $user = User::create([
                'first_name' => strtoupper($request->first_name),
                'last_name' => strtoupper($request->last_name),
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            event(new Registered($user));
            Auth::login($user);

            $user = $request->user();
            switch($user->role_id){
                case 1:
                    return redirect()->intended(RouteServiceProvider::USER_HOME);
                break;
    
                case 2:
                    return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
                break;
    
                case 3:
                    return redirect()->intended(RouteServiceProvider::SUPER_ADMIN_HOME);
                break;
    
                default:    
                Alert::success('Success', 'Kindly set this account as super admin in settings');
                return redirect('/');
            }

        }elseif( $superAdminCount <= 0 ){
            Alert::info('Notice!', 'Kindly assign a super admin account! Contact administrator');
            return redirect('login');
        }


    }
}
