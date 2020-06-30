<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister(){
        return view ('register');
    }

    public function showWelcome(Request $request){
        $data = $request->all();
        $firstname = $data['firstname'];
        return view ('welcome')->with('firstname', $firstname);
    }
}
