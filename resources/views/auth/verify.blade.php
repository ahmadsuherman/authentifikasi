@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <form id="resendVerification" action="/account/resend-verification" method="POST">
                        @csrf
                        akun anda belum diverifikasi, harap cek email anda termasuk spam pada email anda <br>
                        <input type="submit" name="resend-verification" value="Kirim ulang email verifikasi" id="btnSubmit">
                    </form>
                </div>
            </div>
        </div>
    </div>




    @endsection