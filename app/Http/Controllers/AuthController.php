<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function getSignin()
	{
		return view('auth.signin');
	}


    public function getSignup()
    {
    	return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
    	// validating the data
    	$this->validate($request , [
    		'email' => 'required|unique:users|email|max:255',
    		'username' => 'required|unique:users|alpha_dash|max:20',
    		'pass' => 'required|min:6',
    	]);
    	// dd($request);
    	// submmiting to db
    	User::create([
    		'email' => $request->input('email'),
    		'username' => $request->input('username'),
    		'password' => Hash::make($request->input('pass'))
    	]);

    	if(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){

            return redirect()->route('admin.home');
        } 
    }

    

    public function postSignin(Request $request)
    {
    	$this->validate($request,[
    		'email' => 'required',
    		'password' => 'required',
    	]);
  	

    	if(!Auth::attempt($request->only(['email','password']), $request->has('remember'))){
    		
    		return redirect()->back()->with('info','Could not sign you in. Invalid Details');
    	}

    	return redirect()->route('hadmin');
    } 

    public function getSignout()
    {
        Auth::logout();
         return redirect()->route('home');
    }



}
