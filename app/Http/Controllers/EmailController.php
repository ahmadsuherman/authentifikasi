<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
     {
         $nama = "Sumiartini Sri Rahayu";
         $email = "sumiartinisrirahayu@gmail.com";
         $kirim = Mail::to($email)->send(new SendMail($nama));
     if($kirim){         echo "Email telah dikirim";     } }
}
