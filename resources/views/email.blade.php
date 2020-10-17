<center>
    <h1><b>Halo {{ $user->usr_name }}</b></h1> <br>
    <strong> SELAMAT DATANG DI WEB SMK MAHAPUTRA CERDAS UTAMA </strong> <br>

    Silahkan klik link di bawah ini untuk memverifikasi email anda <br>
    <a href="{{url('/account/'.$user->usr_id.'/'.$user->usr_verification_token.'/activate')}}"> CLICK HERE </a>