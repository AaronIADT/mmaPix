<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;500;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/grid2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm justify-content-center navbar-custom">

            <div class="col-12BAR">

                <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_me">
                    <span class="navbar-toggler-icon">
                    </span>

                </button>
                <div class="collapse navbar-collapse" id="collapse_me">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a href="{{ route('admin.events.index') }}" class="nav-link">
                                EVENTS
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.picks.index') }}" class="nav-link">
                                MYPICKS
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.fighters.index') }}" class="nav-link">
                                FIGHTERS
                            </a>
                        </li>

                        <li class="nav-item2">
                            <a href="{{ route('admin.home') }}" class="nav-link">
                                MMAPIX
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="signUp.html" class="nav-link">
                                LEAGUE
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="signUp.html" class="nav-link">
                                CONTACT
                            </a>
                        </li>
                        @guest

                        @if (Route::has('login'))
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                SIGN IN
                            </a>
                            <div class="dropdown-menu">

                                <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>

                                @endif

                                @if (Route::has('register'))

                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>

                                @endif


                            </div>
                        </li>

                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <br>

        <div class="container">

            <div class="col-12">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block w-200" data-src="holder.js/1110x472?auto=no&amp;bg=777&amp;fg=555&amp;text=First slide" alt="First slide [1110x472]" src="{{ asset('photo/mmaBar1.png') }}" data-holder-rendered="true">
                            <div class="carousel-caption d-none d-md-block">

                                <p>Book tickets now</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-200" data-src="holder.js/1110x472?auto=no&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Second slide [1110x472]" src="{{ asset('photo/mmaBar2.png') }}" data-holder-rendered="true">
                            <div class="carousel-caption d-none d-md-block">

                                <p>Book tickets now</p>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <img class="d-block w-200" data-src="holder.js/1110x472?auto=no&amp;bg=666&amp;fg=444&amp;text=Second slide" alt="Third slide [1110x472]" src="{{ asset('photo/mmaBar3.png') }}" data-holder-rendered="true">
                            <div class="carousel-caption d-none d-md-block">

                                <p>Book tickets now</p>
                            </div>
                        </div>



                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div>

            <main class="py-4">
                @yield('content')
            </main>


        </div>

        <div class=container-fluid>
            @yield('footer')
        </div>
</body>


</html>