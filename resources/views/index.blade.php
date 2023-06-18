<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Explicações particulares online </title>
    <meta name="description"
        content="A partir de 6&#x20AC;/h. O &#xE9; a maneira mais simples e r&#xE1;pida de encontrar o teu explicador particular ideal. 1&#xAA; aula gratuita. Exames nacionais, ensino secundario, superior ou extracurricular.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- <link rel="apple-touch-icon" sizes="180x180" href="/dist/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/dist/img/favicon/favicon-32x32.png" sizes="32x32"> --}}
    <link rel="icon" type="image/png" href="img/logo2.png" sizes="16x16">
    {{-- <link rel="manifest" href="/dist/img/favicon/manifest.json">
    <link rel="mask-icon" href="/dist/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff"> --}}

    favicon

    <meta property="og:title" content=" Explicações particulares online" />
    <meta property="og:description"
        content="A partir de 6&#x20AC;/h. O  &#xE9; a maneira mais simples e r&#xE1;pida de encontrar o teu explicador particular ideal. 1&#xAA; aula gratuita. Exames nacionais, ensino secundario, superior ou extracurricular." />
    <meta property="og:image" content="" />

    <!-- CSS -->
    <link href="/css/style.css" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet" />


</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WB2GGXZ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="navbar navbar-fixed-top ">
        <nav class="container-fluid main-navbar">
            <div class="navbar-header main-navbar__logo main-navbar__item">
                <a class="logo" href="/">
                    <img src="img/logo.png" class="img-resposive" alt="BOOKAR" />
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar--collapse" aria-expanded="false">
                    <span class="hamburger"></span>
                </button>
            </div>

            @if (Route::has('login'))
                <div class="navbar navbar--middle hide-mobile">
                    @auth
                        <ul class="nav navbar-nav">
                            <li><a href="/explicadores" class="main-navbar__item">Encontra um explicador</a></li>
                            <li><a href="{{ url('/dashboard') }}" class="main-navbar__item">Meu Perfil</a></li>
                        </ul>
                    @else
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ route('login') }}" class="button button--primary">Login</a></li>
                        </ul>
                        @if (Route::has('register'))
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ route('register') }}" class="button button--primary">Regista-te</a></li>
                            </ul>
                        @endif
                    @endauth
                </div>
            @endif


            @if (Route::has('login'))
                <div class="navbar-collapse collapse right menu" id="navbar--collapse">
                    @auth
                        <ul class="nav navbar-nav">
                            <li><a href="/explicadores" class="main-navbar__item">Encontra um explicador</a></li>
                            <li><a href="{{ url('/dashboard') }}" class="main-navbar__item">Meu Perfil</a></li>
                        </ul>
                    @else
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ route('login') }}" class="button button--primary">Login</a></li>
                        </ul>
                        @if (Route::has('register'))
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ route('register') }}" class="button button--primary">Regista-te</a></li>
                            </ul>
                        @endif
                    @endauth
                </div>
            @endif

        </nav>
    </header>


    <section class="header-nav-padding homeSearch search__container">
        <div class="home-hero__large">
            <div class="left">
                <h1 class="homeSearch__title">Encontre o Explicador Adequado Para Você! </h1>
                <h2 class="homeSearch__subtitle">Aqui encontras explicadores prontos para te ensinar e/ou esclarecer no
                    horário que mais se adequa a ti.</h2>
                <h4 class="homeSearch__small">As aulas são realizadas no conforto de sua casa.</h4>
                <div class="homeSearch__form form-inline">
                    <a href="/explicadores">
                        <div class="form-group">
                            <h5 id="disciplineAutocomplete" class="homeSearch__input">Procurar Explicador</h5>
                            <a class="btn-search__form" data-toggle="tooltip"
                                title="Por favor, selecione uma disciplina válida">
                                <img src="/img/icons/lupa.svg" alt="Procurar">
                            </a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="right">
                <div class="homeSearch__cta">
                    <img src="/img/homepage_illustration_2.png" class="img-responsive" />
                </div>
            </div>
        </div>

        <div class="home-features">
            <div class="container">
                <div class="column">
                    <img src="/img/icons/tutor-quality.svg" alt="Ensino personalizado">
                    <h3>Qualidade dos explicadores</h3>
                    <p id="txt-ligth">Os nossos explicadores são aceites manualmente pela nossa equipa, de modo a
                        garantir a qualidade das aulas.</p>
                </div>
                <div class="column">
                    <img src="/img/icons/day-and-night.svg" alt="Ensino personalizado">
                    <h3>Disponíveis 24/7</h3>
                    <p id="txt-ligth">Os nossos explicadores estão disponíveis para te ajudar 24/7, em qualquer momento
                        que se ajuste ao teu calendário.</p>
                </div>
                <div class="column">
                    <img src="/img/icons/custom-tutoring.svg" alt="Ensino personalizado">
                    <h3>Ensino personalizado</h3>
                    <p id="txt-ligth">Trabalhos de casa? Exames? Dúvidas em exercícios? Contacta o explicador antes de
                        começares as aulas para ajustares as tuas dúvidas.</p>
                </div>
            </div>
        </div>

        <section class="home-hero home-how-it-works">
            <div class="container">
                <div class="home-hero__titles text-center">
                    <h4 class="home-hero__subtitle">Como funciona</h4>
                    <h2 class="home-hero__title">Encontrar o explicador ideal não é fácil, mas agora tornámos essa
                        tarefa o mais simples possível!</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 features--content">
                        <span class="bubble">1</span>
                        <h3>Procura a disciplina em que tens dúvidas</h3>
                    </div>
                    <div class="col-sm-6 features--image margin text-center">
                        <img src="/img/how-it-works/how-it-works-1.png" class="img-responsive"
                            alt="Procura a disciplina em que tens dúvidas" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 features--content">
                        <span class="bubble">2</span>
                        <h3>Encontra o explicador ideal</h3>
                    </div>
                    <div class="col-sm-6 features--image margin text-center">
                        <img src="/img/how-it-works/how-it-works-2.jpg" class="img-responsive"
                            alt="Encontra o explicador ideal" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 features--content">
                        <span class="bubble">3</span>
                        <h3>Faz a marcação da tua aula</h3>
                    </div>
                    <div class="col-sm-6 features--image margin text-center">
                        <img src="/img/how-it-works/how-it-works-3.png" class="img-responsive"
                            alt="Faz a marcação da tua aula" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 features--content">
                        <span class="bubble">4</span>
                        <h3>Aguardar o contacto ou contactar o explicador</h3>
                    </div>
                    <!-- <div class="col-sm-6 features--image margin text-center">
                <img src="/dist/img/how-it-works/how-it-works-4.png" class="img-responsive" alt="Entra na aula" />
            </div>-->
                </div>
            </div>
        </section>

        <div class="discipline__container home-hero">
            <div class="container">
                <div class="home-title text-center">
                    <h4 class="subtitle">disciplinas</h4>
                    <h1>Encontrar o explicador ideal não é fácil, mas agora tornámos essa tarefa o mais simples
                        possível!</h1>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="discipline-card discipline-card--math">
                            <a href="/explicadores">
                                <div class="discipline-card__container">
                                    <div class="discipline-card__text text-center">
                                        <h2 id="txt-ligth">Matemática A</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="discipline-card discipline-card--economics">
                            <a href="/explicadores">
                                <div class="discipline-card__container">
                                    <div class="discipline-card__text text-center">
                                        <h2 id="txt-ligth">Economia</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="discipline-card discipline-card--statistics">
                            <a href="/explicadores">
                                <div class="discipline-card__container">
                                    <div class="discipline-card__text text-center">
                                        <h2 id="txt-ligth">Física</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="discipline-card discipline-card--physicsChemisty">
                            <a href="/explicadores">
                                <div class="discipline-card__container">
                                    <div class="discipline-card__text text-center">
                                        <h2 id="txt-ligth">Química</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="discipline-card discipline-card--english">
                            <a href="/explicadores">
                                <div class="discipline-card__container">
                                    <div class="discipline-card__text text-center">
                                        <h2 id="txt-ligth">Inglês</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="discipline-card discipline-card--calculus">
                            <a href="/explicadores">
                                <div class="discipline-card__container">
                                    <div class="discipline-card__text text-center">
                                        <h2 id="txt-ligth">Introdução à programação</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="footer-phrase__container home-hero">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h3 class="footer-phrase__title">Acreditamos que todos os estudantes devem ter um suporte
                            complementar! <br /> Aqui terás acesso a explicações de disciplinas do ensino básico,
                            secundário e superior.</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Google Tag Manager -->

        <script src="/js/vendor.js"></script>
        <script src="/js/server.js"></script>
        <script src="/js/main.min.js"></script>

        <script></script>
</body>

</html>
