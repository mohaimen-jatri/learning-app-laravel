<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function index()
    {
        return view('frontend.auth.login');
    }

    public function signup()
    {
        return view('frontend.auth.signup');
    }
}
