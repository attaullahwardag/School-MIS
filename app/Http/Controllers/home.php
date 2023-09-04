<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    // 
    public function welcome (){
        $ijaz = ['computer','mobile','watch'];
        return view ('welcome', compact('ijaz'));
    }
}
