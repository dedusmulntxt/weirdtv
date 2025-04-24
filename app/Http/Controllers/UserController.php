<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    function index()
    {
     return view('/');
    }

    function checklogin(Request $request)
    {
    $request->validate([
      'name'   => 'required',
      'password'  => 'required'
     ]);

     $user_data = array(
      'name'  => $request->get('name'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('bubblediag3');
     }
     else
     {
        //Session::flash('message', "I DONT KNOW YOU");
        return view('bubblediag2')->withErrors(['msg' => 'I DONT KNOW YOU']);
     }

    }

    function successlogin()
    {
     return view('successlogin');
    }

    function logout()
    {
     Auth::logout();
     return redirect('main');
    }
}

