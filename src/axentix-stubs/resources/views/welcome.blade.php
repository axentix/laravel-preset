<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="layout">
    <header>
        <nav class="navbar">
            @if(Route::has('login'))
                <div class="navbar-menu ml-auto">
                    @auth
                        <a href="{{ url('/home') }}" class="navbar-link">{{ __('Home') }}</a>
                    @else
                        <a href="{{ route('login') }}" class="navbar-link">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="navbar-link">{{ __('Register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
    </header>

    <main>
        <div class="d-flex h100 vcenter">
            <div class="container">
                <h1 class="txt-grey txt-dark-3 font-w300 txt-center">Laravel</h1>

                <div class="grix xs2 sm4 lg9 center vcenter mt-3">
                    <a target="_blank" class="txt-grey txt-dark-1" href="https://laravel.com/docs">Docs</a>
                    <a target="_blank" class="txt-grey txt-dark-1" href="https://laracasts.com">Laracasts</a>
                    <a target="_blank" class="txt-grey txt-dark-1" href="https://laravel-news.com">News</a>
                    <a target="_blank" class="txt-grey txt-dark-1" href="https://blog.laravel.com">Blog</a>
                    <a target="_blank" class="txt-grey txt-dark-1" href="https://nova.laravel.com">Nova</a>
                    <a target="_blank" class="txt-grey txt-dark-1" href="https://forge.laravel.com">Forge</a>
                    <a target="_blank" class="txt-grey txt-dark-1" href="https://vapor.laravel.com">Vapor</a>
                    <a target="_blank" class="txt-grey txt-dark-1" href="https://github.com/laravel/laravel">GitHub</a>
                    <a target="_blank" class="txt-grey txt-dark-1 col-xs2 col-sm4 col-lg1" href="https://useaxentix.com/">Axentix</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
