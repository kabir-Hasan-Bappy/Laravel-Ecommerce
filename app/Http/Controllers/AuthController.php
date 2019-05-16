<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function showRegisterForm(){

    	$data= [];
    	$data['hero']= false;
    	return view('register',$data );
    }

     public function register(Request $request)
     {
     	 $request->validate(
     	  [

     	 	'first_name'=> 'required',
     	 	'last_name'=> 'required',
     	 	'email'=> 'required|email|unique:users,email',
     	 	'password'=> 'required|min:6',
     ]);

     	 $inputs= $request->except('_token');
     	 $inputs['password']= bcrypt($inputs['password']);

     	try
     	{
     		$user= User::create($inputs);
            event(new Registered($user));

     		session()->flash('message', 'Your account is succesfully registered. ');

     		return redirect()->route('login');
     	}

     	catch(Exception $e)
     	{
     	session()->flash('message', $e->getMessage());
     		return redirect()->back();
     	}
    	
    }


    public function showLoginForm(){

    	$data= [];
    	$data['hero']= false;
    	return view('login', $data);
    }

     public function login(Request $request)
     {
     	 $request->validate(
     	  [
     	 	'email'=> 'required|email',
     	 	'password'=> 'required|min:6',
     ]);

     	 $credentials= $request->except('_token');

     	 if (auth()->attempt($credentials)) {

            $user= auth()->user();
            if($user->hasVerifiedEmail()=== true)
            {
                return redirect()->route('dashboard');
            }
     	 	
         session()->flash('message', 'You need to activate your Email.');
         return redirect()->back();
     	 
     	 }

     	 session()->flash('message', 'Invalid Credentials.');
         return redirect()->back();

    	
    }


    public function logout()
    {
        auth()->logout();
        session()->flash('message', 'You have been logged out.');
        return redirect()->route('login');
    }
}
