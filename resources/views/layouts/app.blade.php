<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- DATATABLE -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> -->

    <!-- Datepicker -->
    <link rel="stylesheet" href="{{asset('plugin\datepicker\dist\css\bootstrap-datepicker.min.css')}}">

    @yield('head')
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"> <b>
                    {{ config('app.name', 'LELUHUR BALI') }}</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                    <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> -->
                        <li class="nav-item @if(strlen(Request::path())==1)active @endif">
                            <a class="nav-link @if(strlen(Request::path())==1)active @endif" href={{url("/")}}>Home</a>
                        </li>
                        <li class="nav-item @if(str_contains(Request::path(),'book'))active @endif">
                            <a class="nav-link @if(str_contains(Request::path(),'book'))active @endif" href={{url("/book")}}>Book</a>
                        </li>
                        <li class="nav-item @if(str_contains(Request::path(),'features'))active @endif">
                            <a class="nav-link @if(str_contains(Request::path(),'features'))active @endif" href={{url("/features")}}>Features</a>
                        </li>
                        <li class="nav-item @if(str_contains(Request::path(),'contact'))active @endif">
                            <a class="nav-link @if(str_contains(Request::path(),'contact'))active @endif" href={{url("/contact-us")}}>Contact Us</a>
                        </li>
                    <!-- </ul> -->
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->first_name }}
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if((Auth::user()!=null))
                                    @if((Auth::user()->role == 'customer'))
                                    <li>
                                        <a href="{{url('my-books')}}" class="dropdown-item">My Order</a>
                                    </li>
                                    @endif
                                    @endif
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-0">
            @yield('content')
<!--
            <section class="footer mb-0 w-100 mt-auto color-primary py-5" style="background-color: #333;">
                <div class="container text-light" style="">
                    <div class="row">
                        <div class="col-sm"><h6>Contact Us</h6>
                            <p>
                                Jl. Intan Permai, Gg. Berlian 1C, Kerobokan Kelod, Kuta - Bali E.
                                <br> E. info@leluhurbali.com <br> P. +62 81 834 9919 <br> M. +62 82 247 030 147
                            </p>
                        </div>
                        <div class="col-sm"><h6>Quick Links</h6>
                            <a href="{{route('home')}}">Home</a> <br>
                            <a href="{{route('book.villa', 1)}}">Book</a><br>
                            <a href="{{route('features.index')}}">Features</a><br>
                            <a href="{{route('contact-us')}}">Contact Us</a>
                        </div>
                        <div class="col-sm"><h6>Social Media</h6>

                            <a href="#" style="width: 10px; height:10px" class="" title="Instagram"><svg style="color: white; width:32px; height:32px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" fill="white"></path> </svg></a>
                        </div>
                    </div>
                </div>
            </section> -->
        </main>
    </div>
</body>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/datatables.min.js"></script>


<script type="text/javascript" src="{{asset('plugin\datepicker\dist\js\bootstrap-datepicker.js')}}"></script>
<script>
    var formatter = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 2,
    });
    console.log(formatter.format(20000000))
</script>
@yield('script')
</html>
