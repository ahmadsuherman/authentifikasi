<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class AccountController extends Controller
{
    public function verifyToken($userID, $verifyToken){

        $user = User::where('usr_id', $userID)->where('usr_verification_token', $verifyToken)->firstOrFail();
        if ($user) {
            $user->usr_email_verified_at = now();
            $user-> save();

            return redirect('/dashboard')->with('success', 'Selamat akun anda berhasil diverifikasi');;
        }
    }

    public function waitingVerification(){

    	if (Auth::user()->usr_email_verified_at == null) {
    		return view('auth/verify');
    	} else {
    		return redirect('/dashboard');
    	}
    }

    public function resendVerification(){
    
        $user = Auth::user();
        Mail::to($user['usr_email'])->send(new SendMail($user));
        return redirect()->back()->with('success', 'Email verifikasi berhasil dikirim ulang'); 
    }
}