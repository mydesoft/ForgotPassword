<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{

	public function home()
	{

	return view('home');
	}

    public function register()
    {
        return view('user.register');
    }

    public function userRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]
    );

      
    	User::create([

    		'name' => $request->name,
    		'email' => $request->email,
    		'password' => Hash::make($request->password),
    	]);

    	return redirect()->route('login');
    	
    }

    public function login()
    {
        return view('user.login');
    }

    public function userLogin(Request $request)
    {
    	if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
    		
    		return redirect()->route('home');
    	}
        else{
        return redirect('/login')->with('errors', 'Invalid Login Details!');

        }
    	
    }

    public function userLogout()
    {
    	Auth::logout();
    	return redirect()->route('login');
    }



  
}
