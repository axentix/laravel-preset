@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card light-shadow-2 rounded-2 mx-auto mt-4 container white">
            <div class="card-header">{{ __('Confirm Password') }}</div>
            <div class="card-content">
                <form class="form-material" method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <p>
                        {{ __('Please confirm your password before continuing.') }}
                    </p>

                    <div class="form-field">
                        <label for="password">{{ __('Password') }}</label>
                        <input type="password" name="password" id="password" class="form-control" required autocomplete="new-password">
                        @error('password')
                        <p class="txt-center form-helper error">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <button type="submit" class="btn outline opening txt-primary rounded-4 mx-auto mt-3">
                        <span class="outline-text">{{ __('Confirm Password') }}</span>
                    </button>

                    @if (Route::has('password.request'))
                        <div class="d-flex mt-3">
                            <a href="{{ route('password.request') }}" class="txt-center mx-auto txt-blue txt-light-1">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
