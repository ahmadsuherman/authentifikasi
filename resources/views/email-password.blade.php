<center>
    <h1><b>Halo {{ $users->usr_name }}</b></h1> <br>
    <strong> EXAMPLE BODY BOLD FORGOT PASSWORD </strong> <br>
    Silahkan klik link di bawah ini untuk mengubah password anda <br>
    <a href="{{url('/account/'.$resetPassword->pwr_token.'/forgot-password')}}"> CLICK HERE </a> <br><br><br>
</center>
Thanks, <br>
SMKS MAHAPUTRA CERDAS UTAMA