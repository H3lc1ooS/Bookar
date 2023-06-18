<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Learnify - Explicações online</title>
    <meta name="description" content="No Learnify vais tirar todas as tuas dúvidas ao melhor preço, online, sem saíres de casa">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="/dist/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/dist/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/dist/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/dist/img/favicon/manifest.json">
    <link rel="mask-icon" href="/dist/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">


    <!-- CSS -->
    <link href="/css/style.css" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet" />
    <link href="/css/jquery.week-planner.css" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="dashboard">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WB2GGXZ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="navbar navbar-fixed-top ">
        <nav class="container-fluid main-navbar">
            <div class="navbar-header main-navbar__logo main-navbar__item">
                <a class="logo" href="/home">
                    <img src="/img/logo.png" class="img-resposive" alt="Learnify" />
                </a>
                <div class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar--collapse" aria-expanded="false">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('dashboard')">
                                {{ __('Encontrar Explicador') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('dashboard')">
                                {{ __('Meu Perfil') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Terminar Sessão') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <div class="navbar navbar--middle hide-mobile">
                <ul class="nav navbar-nav">
                    <li><a href="/tutors" class="main-navbar__item">Encontra um explicador</a></li>
                </ul>
            </div>

            <div class="right menu hide-mobile">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/help-center" class="menu-icon">Ajuda</a>
                    </li>
                    <li>
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                    <div>{{ Auth::user()->name }}</div>

                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('dashboard')">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div class="navbar navbar-inverse navbar-sub">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/dashboard">Encontarar Explicador</a></li>
                <li><a href="/dashboard/messages">Mensagens</a></li>
                <li><a href="/dashboard/sessions/past">Meu Perfil</a></li>
                <li><a href="/dashboard/reviews">Reportar</a></li>
            </ul>
        </div>
    </div>

    <section class="dash-container">
        <div class="container">
            <div class="row">
                <div class="col-md-3 dash__user-info">

                    <div class="row">
                        <div class="col-sm-12 text-center dash-block">
                            <div class="dash__user-info-content">
                                <div class="mt-15">
                                    <h4 class="usename">{{ Auth::user()->name }}</h4>
                                </div>
                            </div>
                            <div class="row text-center dash__user-info-links">
                                <div class="col-sm-12 warning-bg">
                                    <form method="post" action="{{ route('dashboard.destroy') }}" class="p-1">
                                        @csrf
                                        @method('delete')
                                        <button id="txt-allert" type="submit" data-toggle="tooltip" title="Se apagar a sua conta, terá que criar uma nova para ter acesso a plataforma">Apagar Conta</button>
                                    </form>
                                </div>

                                <div class="col-sm-12">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <a href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Terminar Sessão') }}
                                        </a>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-9">



                    <div class="row">
                        <div class="col-sm-12">
                            <div class="dash-block dash__notifications">
                                <div class="dash-block__title">
                                    <h4>Editar meu perfil</h4>
                                </div>
                                <div class="dash-block__content">
                                    <ul class="list-unstyled me-list">
                                        <li>
                                            <div class="py-12">
                                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                                        <div class="max-w-xl">
                                                            @include('profile.partials.update-profile-information-form')
                                                        </div>
                                                    </div>

                                                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                                        <div class="max-w-xl">
                                                            @include('profile.partials.update-password-form')
                                                        </div>
                                                    </div>

                                                    <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                                                        <div class="max-w-xl">
                                                            @include('profile.partials.delete-user-form')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WB2GGXZ');
    </script>
    <!-- End Google Tag Manager -->
    <!-- start Mixpanel -->
    <script type="text/javascript">
        (function(e, a) {
            if (!a.__SV) {
                var b = window;
                try {
                    var c, l, i, j = b.location,
                        g = j.hash;
                    c = function(a, b) {
                        return (l = a.match(RegExp(b + "=([^&]*)"))) ? l[1] : null
                    };
                    g && c(g, "state") && (i = JSON.parse(decodeURIComponent(c(g, "state"))), "mpeditor" === i.action && (b.sessionStorage.setItem("_mpcehash", g), history.replaceState(i.desiredHash || "", e.title, j.pathname + j.search)))
                } catch (m) {}
                var k, h;
                window.mixpanel = a;
                a._i = [];
                a.init = function(b, c, f) {
                    function e(b, a) {
                        var c = a.split(".");
                        2 == c.length && (b = b[c[0]], a = c[1]);
                        b[a] = function() {
                            b.push([a].concat(Array.prototype.slice.call(arguments,
                                0)))
                        }
                    }
                    var d = a;
                    "undefined" !== typeof f ? d = a[f] = [] : f = "mixpanel";
                    d.people = d.people || [];
                    d.toString = function(b) {
                        var a = "mixpanel";
                        "mixpanel" !== f && (a += "." + f);
                        b || (a += " (stub)");
                        return a
                    };
                    d.people.toString = function() {
                        return d.toString(1) + ".people (stub)"
                    };
                    k = "disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset opt_in_tracking opt_out_tracking has_opted_in_tracking has_opted_out_tracking clear_opt_in_out_tracking people.set people.set_once people.unset people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
                    for (h = 0; h < k.length; h++) e(d, k[h]);
                    a._i.push([b, c, f])
                };
                a.__SV = 1.2;
                b = e.createElement("script");
                b.type = "text/javascript";
                b.async = !0;
                b.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : "file:" === e.location.protocol && "//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ? "https://cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js" : "//cdn4.mxpnl.com/libs/mixpanel-2-latest.min.js";
                c = e.getElementsByTagName("script")[0];
                c.parentNode.insertBefore(b, c)
            }
        })(document, window.mixpanel || []);
        mixpanel.init("248210c317c983eaf80f3185339a7d1d");
    </script><!-- end Mixpanel -->
    <script src="/dist/js/main.min.js?v=300320222154"></script>

    <script>
        ga('set', 'userId', "11973");
        mixpanel.identify("11973");
        mixpanel.track('Open dashboard');
    </script>
    <script src="/js/vendor.js"></script>
    <script src="/js/server.js"></script>
    <script src="/js/main.min.js"></script>

</body>

</html>