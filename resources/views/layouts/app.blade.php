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
