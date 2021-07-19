<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        dd('Đây là index');
    }

    public function login(Request $request)
    {
        $name = $request->input('username');
//        if( $name == 'admin' && $request->password == '123'){
            return redirect()->route('profile',$name);
//        }
    }

    public function showProfile($name)
    {
        return view('profile',compact('name'));
    }
}
