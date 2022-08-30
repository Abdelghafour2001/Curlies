<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    function UserLogin(){
        return view('userlogin');
    }
}
