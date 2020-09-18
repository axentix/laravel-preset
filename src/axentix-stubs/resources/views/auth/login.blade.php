@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card light-shadow-2 rounded-2 mx-auto mt-4 container white">
            <div class="card-header">{{ __('Login') }}</div>
            <div class="card-content">
                <form class="form-material" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="grix xs1 sm2 gutter-sm2">
                        <div class="form-field">
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
                            <input type="password" name="password" id="password" class="form-control" required autocomplete="current-password">
                            @error('password')
                            <p class="txt-center form-helper error">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="form-field col-sm2">
                            <label class="form-check">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                <span>{{ __('Remember Me') }}</span>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn outline opening txt-primary rounded-4 mx-auto mt-2">
                        <span class="outline-text">{{ __('Login') }}</span>
                    </button>

                    @if (Route::has('password.request'))
                        <div class="d-flex mt-3">
                            <a href="{{ route('password.request') }}" class="txt-center mx-auto txt-blue txt-light-1">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif

                    @if (Route::has('register'))
                        <p class="txt-center mt-2">
                            {{ __("Don't have an account?") }}
                            <a class="txt-blue txt-light-1" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </p>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
