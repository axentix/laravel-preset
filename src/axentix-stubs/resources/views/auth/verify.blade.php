@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('resent'))
            <div class="txt-center success p-3 rounded-2 light-shadow-2 mt-4" role="alert">
                {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
        @endif
        <div class="card light-shadow-2 rounded-2 mx-auto mt-4 container white">
            <div class="card-header">{{ __('Verify Your Email Address') }}</div>
            <div class="card-content">
                <p>
                    {{ __('Before proceeding, please check your email for a verification link.') }}
                </p>

                <p>
                    {{ __('If you did not receive the email') }}, <a class="txt-blue txt-light-1" onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">{{ __('click here to request another') }}</a>.
                </p>

                <form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}" class="hide">
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
