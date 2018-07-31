<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar is-light" role="navigation" aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{route('home')}}">
                        <img src="{{asset('images/octs-logo.png')}}" class="is-16by9" alt="OCTS Logo">
                    </a>

                    <a role="button" class="navbar-burger is-active" data-target="navMenu" aria-label="menu" aria-expanded="false">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div class="navbar-menu" id="navMenu">
                    <div class="navbar-start">
                        <a href="#" class="navbar-item is-tab">Home</a>
                        <a href="#" class="navbar-item is-tab">About</a>
                        <a href="#" class="navbar-item is-tab">Services</a>
                        <a href="#" class="navbar-item is-tab">Blog</a>
                        <a href="#" class="navbar-item is-tab">Contact</a>
                    </div>

                    <div class="navbar-end">
                        @guest()
                            <a href="#" class="navbar-item is-tab">Login</a>
                            <a href="#" class="navbar-item is-tab">Sign up</a>
                        @else
                            <div class="navbar-item has-dropdown is-hoverable is-tab">
                                <a class="navbar-link">
                                    Tshepo Mohlatlole
                                </a>
                                <div class="navbar-dropdown">
                                    <a href="#" class="navbar-item is-tab">
                                            <span class="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>Profile
                                    </a>
                                    <a href="#" class="navbar-item is-tab">
                                            <span class="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>Notifications
                                    </a>
                                    <a href="#" class="navbar-item is-tab">
                                        <span class="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>Settings
                                    </a>
                                    <hr class="navbar-divider">
                                    <a href="#" class="navbar-item is-tab">
                                        <span class="icon"><i class="fa fa-fw m-r-5 fa-sign-out"></i></span>Logout
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
