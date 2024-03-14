<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
    	return view('pages.auth.login');
    }

    public function login_backend(Request $req)
    {
    	$this->validate($req, [
    		'email' => 'required|email',
    		'password' => 'required'
    	]);

    	if(Auth::attempt(['email' => $req->email, 'password' => $req->password]))
    	{
    		if(Auth::user()->is_admin === 1){
    			return redirect('/admin');
    		}else{
    			return redirect('/user');
    		}
    	}else{
    		return redirect('/login')->with('msg','Email dan password salah!');
    	}
    }

    public function logout()
    {
        
    }
}
