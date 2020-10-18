@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if(Auth()->user()->hasRole('student'))
            <div class="card">
                <div class="card-header" style="background: yellow">{{ __('Dashboard Siswa') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br><br>
                    Example Tampilan Untuk Siswa
                </div>
            </div>
            @elseif(Auth()->user()->hasRole('teacher'))

            <div class="card">
                <div class="card-header" style="background: grey">{{ __('Dashboard Guru') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br><br>
                    Example Tampilan Untuk Guru
                </div>
            </div>

            @elseif(Auth()->user()->hasRole('staff'))

            <div class="card">
                <div class="card-header" style="background: blue">{{ __('Dashboard Staff') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br><br>
                    Example Tampilan Untuk Staff
                </div>
            </div>

            @else

            <div class="card">
                <div class="card-header" style="background: green">{{ __('Dashboard') }} Admin</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>

            @endif

        </div>
    </div>
</div>
@endsection