@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('status'))
            <div class="txt-center success p-3 rounded-2 light-shadow-2 mt-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="card light-shadow-2 rounded-2 mx-auto mt-4 container white">
            <div class="card-header">{{ __('Reset Password') }}</div>
            <div class="card-content">
                <form class="form-material" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-field">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <p class="txt-center form-helper txt-red">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <button type="submit" class="btn outline opening txt-primary rounded-4 mx-auto mt-3">
                        <span class="outline-text">{{ __('Send Password Reset Link') }}</span>
                    </button>

                    <div class="d-flex mt-3">
                        <a href="{{ route('login') }}" class="txt-center mx-auto txt-blue txt-light-1">
                            {{ __('Back to login') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
