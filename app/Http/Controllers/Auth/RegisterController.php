<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        //vaidate request
        $this->validate($request,[
            'firstname' => 'required|max 255',
            'lastname' => 'required|max 255',
            'mobile' => 'required|number|max 10',
            'county' => 'required|max 255',
            'nationality' => 'required|max 255',
            'email' => 'required|email|max 255',
            'username' => 'required|max 255',
            'password' => 'required|confirmed',
        ]);
        //store user
        //sign user in
        //redirect user
    }
}
