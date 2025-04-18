<?php

namespace App\Http\Controllers;

class ErrorPageController extends Controller
{
    public function error_404(){
        return view();
    }
}