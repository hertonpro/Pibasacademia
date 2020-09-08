<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    {{-- entete de page  --}}
    @include('head')
    {{-- fin entete de page  --}}
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-xl fixed-top hk-navbar bg-white navbar-scroll">
            <div class="container">
                <a href="{{ url('/home') }}" class="navbar-brand font-weight-700">
                    <img class="brand-img d-inline-block align-top mr-10" src="dist/img/logo.png"
                        alt="PiBas" />Academia</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="feather-icon"><i data-feather="menu"></i></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">

                        </li>
                        <li class="nav-item">
                            <a href="{{ url('#apropos') }}" class="nav-link">Apropos</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/blog') }}" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/blog#gallerie') }}" class="nav-link">Gallerie</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/faq') }}" class="nav-link">Faq</a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="caret">{{ Auth::user()->name1.' '.Auth::user()->name2 }}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('users.index') }}">
                                    {{ __('Profil') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Deconnexion') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>


                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="font-22 zmdi zmdi-notifications"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/users')}}">MLMsystem</a>
                        </li>
                        @endguest



                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <!-- Main Content -->
            <div class="hk-pg-wrapper">
                <div class="container-fluid">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-xl-12 ">
                            @yield('content')
                        </div>
                    </div>
                    <!-- /Row -->
                    @include('footerinclude')
                </div>
            </div>
            <!-- /Container -->
        </main>
    </div>
</body>

</html>