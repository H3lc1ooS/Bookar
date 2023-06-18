<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="/dist/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/dist/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/dist/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/dist/img/favicon/manifest.json">
    <link rel="mask-icon" href="/dist/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">


    <!-- CSS -->
    <link href="/css/tutors.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet" />
    <link href="/css/jquery.week-planner.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="dashboard">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WB2GGXZ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="navbar navbar-fixed-top ">
        <nav class="container-fluid main-navbar">
            <div class="navbar-header main-navbar__logo main-navbar__item">
                <a class="logo" href="{{ route('explicadores') }}">
                    <img src="img/logo.png" class="img-resposive" alt="BOOKAR" />
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar--collapse" aria-expanded="false">

                </button>
            </div>

            @auth
                <div class="" id="">
                    <ul class="">
                        <li>
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('explicadores')">
                                        {{ __('Home') }}
                                    </x-dropdown-link>

                                    <x-dropdown-link :href="route('dashboard')">
                                        {{ __('Meu Perfil') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Terminar Sessão') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </li>
                    </ul>
                </div>
            @endauth


        </nav>
    </header>


    <div class="navbar navbar-inverse navbar-sub">
        <div class="container-fluid">
            @auth
                <ul class="nav navbar-nav">
                    <li><a href="/explicadores">Encontrar Explicador</a></li>
                    <li><a href="/dashboard">Meu Perfil</a></li>
                </ul>
            @endauth

            @guest
                <ul class="nav navbar-nav">
                    <li><a href="/login">Entrar</a></li>
                    <li><a href="/register">Criar conta</a></li>
                </ul>
            @endguest
        </div>
    </div>

    <section class="dash-container">
        @yield('content')
    </section>

    <script src="/js/vendor.js"></script>
    <script src="/js/server.js"></script>
    <script src="/js/main.min.js"></script>

</body>

</html>
