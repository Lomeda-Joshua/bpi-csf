<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class superAdminCheckCount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {

        $role_super_admin_count = User::where('role_id', 'LIKE', '3%')->count();

        if( $role_super_admin_count == 3){
            
        }else{
            return redirect('login');
        }
        return $next($request);
     
    }
}
