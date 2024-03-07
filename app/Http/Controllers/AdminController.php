<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

    public function loginAdmin(){
        return 'login Admin';
    }

    public function index()
    {
        User::select('office_id')->get();
        return view('admin.index');
    }

    public function csfList(){
        return view('admin.csfList');
    }

    public function profile(){
        return view('admin.profile');
    }

    public function officeDetails(){
        return view('admin.officeDetails');
    }

    public function personnelList(){
        return view('admin.personnelList');
    }
   
}
