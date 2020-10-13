<h1>Halo {{ $user->usr_name }}</h1>
link verifikasi 
<a href="{{url('/account/'.$user->usr_id.'/'.$user->usr_verification_token.'/activate')}}"> CLICK HERE </a><br>
