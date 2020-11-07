<?php

namespace App\Http\Controllers;

use App\Mail\PasswordResetEmail;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function forgotPassword(){
    	return view('password.forgotpassword');
    }

    public function sendResetLink(Request $request)
    {
    	$request->validate(['email' => 'required|email']);

    	$email = $request->email; 

    	$userEmail = User::where('email', $email)->first();

    	if (!$userEmail) {

    		return redirect('/forgotpassword')->with('errors', 'Invalid Email!');
    	}

    	$token = Str::random(60);

    	PasswordReset::create([

    		'email' => $email,

    		'token' => $token,
    	]);
    		 
    	$tokenData = PasswordReset::where('email', $email)->first();

    		if($tokenData){

    			Mail::to($tokenData->email)->send(new PasswordResetEmail($tokenData));

    			return back()->with('success', 'A Reset Link has been sent to your Mail!');
    		}
    		else{
    			return back()->with('errors', 'Sorry we could not send a link, try again later!');
    		}
    	
    	
    }

    public function showResetPasswordForm($token)
    {

    	return view('password.resetpassword')->with('token', $token);
    }

    public function resetPassword(Request $request)
    {
        $request->validate(['email'=>'required|email', 'password'=>'required|min:6|confirmed']);
      
    	$email = $request->email;

    	$user = User::where('email', $email)->first();

    	if (!$user) {

    		return back()->with('errors', 'Invalid Mail!');		
    	}

    	$tokenData = PasswordReset::where('token', $request->token)->first();

        if(!($request->has('token') && $tokenData)){

            return back()->with('errors', 'Token not Found!');      

        }

         $user->fill(['password' => Hash::make($request->password)])->save();

     	 $token = PasswordReset::where('email', $user->email)->delete();
   
  
    	return redirect('/login')->with('success', 'Password Changed Successfully');		

    	
    }
}
