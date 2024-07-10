<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        // dd(Hash::make(123456789));  //TO MAKE A HASHED PASSWORD

        if(!empty(Auth::check()))
        {
            return redirect('admin/dashboard');
        }

        return view('auth.login');

    }


    public function authLogin(Request $request){
        // dd($request->all());

        $remember = !empty($request->remember) ? true : false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], true))
        {
            return redirect('admin/dashboard');
        }
        else
        {
            return redirect()->back()->with('error', 'Please Enter A Correct Email And Password!');
        }

    }


    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }



}
