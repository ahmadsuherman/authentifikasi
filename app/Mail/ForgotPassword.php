<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $users = User::whereUsrEmail($request->usr_email)->first();
        $resetPassword = DB::table('password_resets')->where('pwr_email', $request->usr_email)->first();
        return $this->view('email-password', compact('resetPassword', 'users'));
    }
}
