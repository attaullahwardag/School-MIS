<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function Logout(){
        //Logout user and return to login route
        Auth::logout();
        return redirect()->route('login');
    }
}
