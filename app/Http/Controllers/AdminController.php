<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function loginAdmin(){
        return 'login Admin';
    }

    public function index(){
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
