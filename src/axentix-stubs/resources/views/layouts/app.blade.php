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
    @yield('extra-css')
</head>

<body class="layout grey light-4">
    <header>
        <nav class="navbar primary shadow-1">
            <a href="{{ url('/') }}" class="navbar-brand">{{ config('app.name', 'Laravel') }}</a>

            <div class="navbar-menu ml-auto">
                @guest
                    <a class="navbar-link {{ Request::routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>

                    @if (Route::has('register'))
                        <a class="navbar-link {{ Request::routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif

                @else
                    <span class="mr-2">{{ Auth::user()->name }}</span>

                    <a href="{{ route('logout') }}"
                       class="navbar-link"
                       onclick="event.preventDefault(); document.getElementById('form-logout').submit();"
                    >
                        {{ __('Logout') }}
                    </a>

                    <form id="form-logout" action="{{ route('logout') }}" method="POST" class="hide">
                        @csrf
                    </form>
                @endguest
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <!-- Footer content -->
    </footer>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
    @yield('extra-js')
</body>

</html>
