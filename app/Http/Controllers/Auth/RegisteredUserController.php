<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

            $auth_id = Auth::user();
            
            return view('auth.register');

        // if(  ) {
        //     $role_id = auth()->user()->role_id;

        //     if($superAdminCount == 1){
        //         return view('auth.login', [ 'role_verify' => $role_id ]);
        //     }else{
        //         return view('auth.login', [ 'role_verify' => $role_id ]);
        //     }

        // }elseif( $superAdminCount == 0 ){

        //     return view('auth.register');

        // }else{
        //     $role_id = auth()->user()->role_id;
        //     return view('auth.login', [ 'role_verify' => $role_id ]);
        // }



    }



    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $superAdminCount = DB::table('users')->select('role_id')->where('role_id', 3)->count();
        $userCount = DB::table('users')->get()->count();

        if( $userCount <= 0  ){

            $user = User::create([
                'name' => $request->name,
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
            return redirect('/');
            
        }


    }
}
