@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card light-shadow-2 rounded-2 mx-auto mt-4 container white">
            <div class="card-header">{{ __('Reset Password') }}</div>
            <div class="card-content">
                <form class="form-material" method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="grix xs1 sm2 gutter-sm2">
                        <div class="form-field col-sm2">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <p class="txt-center form-helper error">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="form-field">
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" name="password" id="password" class="form-control" required autocomplete="new-password">
                            @error('password')
                            <p class="txt-center form-helper error">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="form-field">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <button type="submit" class="btn outline opening txt-primary rounded-4 mx-auto mt-2">
                        <span class="outline-text">{{ __('Reset Password') }}</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
