<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;

class AccountController extends Controller
{
    public function verifyToken($userID, $verifyToken){

        $user = User::where('usr_id', $userID)->where('usr_verification_token', $verifyToken)->firstOrFail();
        if ($user) {
            $user->usr_email_verified_at = now();
            $user-> save();

            return redirect('/');
        }
    }

    public function waitingVerification(){

    	if (Auth::user()->usr_email_verified_at == null) {
    		return view('auth/verify');
    	} else {
    		return redirect('/dashboard');
    	}
    }

    
}
