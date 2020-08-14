<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function __construct()
	{
	    $this->middleware('guest')->except('logout');
	    $this->middleware('auth')->only('logout');
	}
    public function login()
    {
    	return view('admin.auth.login');
    }

    public function loginProcces(Request $request)
    {
    	$data=$request->only('email','password');
    	$succes=Auth::attempt($data);
    	if ($succes) {
    		return redirect()->route('admin');	
    	}
    	else{
    		return redirect()->back();
    	}
    }

    public function register()
    {
    	return view('admin.auth.register');
    }

    public function registerProcces(Request $request)
    {
    	$passwordencrpt=bcrypt($request->password);
    	$role='author';
    	$request->merge(['password'=>$passwordencrpt,'role'=>$role]);
    	User::create($request->all());
    	return redirect()->route('login');
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect()->route('login');
    }

}
