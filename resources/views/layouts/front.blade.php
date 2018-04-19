<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('fullcalendar-3.9.0/lib/cupertino/jquery-ui.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{--style fullcalendar--}}



    <link href="{{asset('fullcalendar-3.9.0/fullcalendar.css') }}" rel="stylesheet"></link>
{{--    <link href="{{asset('fullcalendar-3.9.0/fullcalendar.print.css') }}" rel="stylesheet"></link>--}}

    <script src="{{asset('fullcalendar-3.9.0/lib/moment.min.js') }}"></script>
    <script src="{{asset('fullcalendar-3.9.0/lib/jquery.min.js') }}"></script>
{{--    <script src="{{asset('fullcalendar-3.9.0/lib/jquery-ui.custom.min.js') }}"></script>--}}




</head>
<body>

<?php //dd(Auth::user());?>
<div class="container">
    <div id="app">


        <section>


            <div class="row">
                <div class="col-12">
                    <a class="navbar-brand" href="{{route('homeRooms.index')}}">
                        <img src="{{ asset('img/logoURZ.png')}}" alt="">
                    </a>

                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg  navigation" id="menu-up">


                        <button class="navbar-toggler " id="btn-list" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>


                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto main-nav ">


                                <li class="nav-item active">
                                    <a class="btn btn-primary list-center-menu" href="{{route('homeLectures.index')}}">Wykładowcy</a>
                                </li>

                                <li class="nav-item">
                                    <a class="btn btn-primary list-center-menu"
                                       href="{{route('homeRooms.index')}}">Sale</a>
                                </li>


                                @if(Auth::user())

                                @if(Auth::user()->isRole('administrator'))
                                <li class="nav-item dropdown dropdown-slide list-center-menu">
                                    <a class="nav-link dropdown-toggle btn btn-warning" href="#"
                                       data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        Dodaj <span><i class="fa fa-angle-down"></i></span>
                                    </a>
                                    <!-- Dropdown list -->
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('users.create')}}">użytkownik</a>
                                        <a class="dropdown-item" href="{{route('rooms.create')}}">Sala</a>
                                        <a class="dropdown-item" href="{{route('buildings.create')}}">Budynek</a>
                                        <a class="dropdown-item" href="{{route('faculties.create')}}">Wydzial</a>
                                        <a class="dropdown-item" href="{{route('events.create')}}">Przedmiot</a>
                                        <a class="dropdown-item" href="{{route('typeRooms.create')}}">Rodzaj Sali</a>
                                        <a class="dropdown-item" href="{{route('fieldStudies.create')}}">Kierunek</a>

                                    </div>
                                </li>

                                <li class="nav-item dropdown dropdown-slide ">
                                    <a class="nav-link dropdown-toggle btn btn-warning" href="#"
                                       data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        wyświetl <span><i class="fa fa-angle-down"></i></span>
                                    </a>
                                    <!-- Dropdown list -->
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('users.index')}}">użytkownik</a>
                                        <a class="dropdown-item" href="{{route('rooms.index')}}">Sale</a>
                                        <a class="dropdown-item" href="{{route('buildings.index')}}">Budynki</a>
                                        <a class="dropdown-item" href="{{route('faculties.index')}}">Wydzialy</a>
                                        <a class="dropdown-item" href="{{route('events.index')}}">Przedmioty</a>
                                        <a class="dropdown-item" href="{{route('typeRooms.index')}}">Rodzaje sal</a>
                                        <a class="dropdown-item" href="{{route('fieldStudies.index')}}">Kierunki</a>
                                    </div>
                                </li>

                                @endif

                                @if(Auth::user()->isRole('prowadzacy'))
                                <li class="nav-item dropdown dropdown-slide ">
                                    <a class="nav-link dropdown-toggle btn btn-warning" href="#"
                                       data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        prowadzacy <span><i class="fa fa-angle-down"></i></span>
                                    </a>
                                    <!-- Dropdown list -->
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="category.html">wykladowców</a>
                                        <a class="dropdown-item" href="single.html">Sale</a>
                                        <a class="dropdown-item" href="store-single.html">Budynki</a>
                                        <a class="dropdown-item" href="dashboard.html">Wydzialy</a>
                                        <a class="dropdown-item" href="user-profile.html">Przedmioty</a>
                                        <a class="dropdown-item" href="submit-coupon.html">Rodzaje sal</a>
                                        <a class="dropdown-item" href="blog.html">Kierunki</a>
                                    </div>
                                </li>

                                @endif

                                @endif


                                {{--
                                <li class="nav-item dropdown dropdown-slide">--}}
                                    {{--<a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" --}}
                                           {{--aria-haspopup="true" aria-expanded="false">--}}
                                        {{--Listing <span><i class="fa fa-angle-down"></i></span>--}}
                                        {{--</a>--}}


                                    {{--<!-- Dropdown list -->--}}
                                    {{--
                                    <div class="dropdown-menu dropdown-menu-right">--}}
                                        {{--<a class="dropdown-item" href="#">Action</a>--}}
                                        {{--<a class="dropdown-item" href="#">Another action</a>--}}
                                        {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                                        {{--
                                    </div>
                                    --}}
                                    {{--
                                </li>
                                --}}


                            </ul>


                            <ul class="navbar-nav ml-auto mt-10" id="login-links">
                                <!-- Authentication Links -->
                                @guest
                                <li><a class="btn btn-success" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                @else
                                <li class="nav-item dropdown ">
                                    <h6>Zalogowany jako </h6>
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-primary" href="#"
                                       role="button" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>


                                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Wyloguj') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>


                        </div>
                    </nav>
                </div>
            </div>

        </section>


        <section>

            <main class="py-4">
                @yield('content')
            </main>

        </section>


        <section>
            <div class="row" id="footer-id">

                <h4>Produkcja 2018 &copy;</h4>


            </div>
        </section>


    </div>
</div>

<script src="{{asset('fullcalendar-3.9.0/fullcalendar.js')}}"></script>
<script src="{{asset('fullcalendar-3.9.0/locale/pl2.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
