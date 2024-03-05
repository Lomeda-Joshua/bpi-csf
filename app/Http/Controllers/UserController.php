<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        return view('users.index');
    }

    public function csfList()
    {
        return view('users.csfList');
    }

    public function profile()
    {
        $profile_details = Auth::user()->select('name','email','role_id','office_id','created_at','updated_at')->get();
        return view('users.profile', [ 'profile_details' => $profile_details]);
    }

    public function officeDetails()
    {
        return view('users.officeDetails');
    }

}
