<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function Register()
    {
        return view('member.register');
    }

    public function ForgotMyPass()
    {
        return view('member.lostpwd');
    }

    public function Login()
    {
        return view('member.login');
    }
}
