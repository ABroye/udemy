<!-- En tête -->
<header class="header p-3">
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient fixed-top shadow-lg" aria-label="navbar">
        <div class="container-fluid">
            <!-- Logo -->
            <picture class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
                <img class="logo pb-1" src="frontend/img/logo.svg" alt="Logo RaspDev" />
            </picture>
            <!-- Nom du site web -->
            <a class="navbar-brand" href="{{ url('/') }}">
                RaspDev&nbsp;<sup><code><i class="fa fa-code"></i></code></sup>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsRaspdev"
                aria-controls="navbarsRaspdev" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu principal fixed-Top -->
            <div class="collapse navbar-collapse" id="navbarsRaspdev">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}"><i
                                class="fa fa-home"></i>&nbsp;Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}"><i class="fa fa-envelope"></i>&nbsp;Contact</a>
                    </li>
                    <!-- Menu déroulant Nos solutions -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/solutions') }}" id="dropdown01"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-leaf"></i>&nbsp;Nos
                            solutions</a>
                        <ul class="dropdown-menu dropdown-menu-dark rounded-0" aria-labelledby="dropdown01">
                            <li>
                                <a class="dropdown-item" href="{{ url('/silver') }}">Silver</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/gold') }}">Gold</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/platinium') }}">Platinium</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/ultimate') }}">Ultimate</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Menu déroulant Configuration -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/configuration') }}" id="dropdown02"
                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                class="fa fa-cogs"></i>&nbsp;Configuration</a>
                        <ul class="dropdown-menu dropdown-menu-dark rounded-0" aria-labelledby="dropdown02">
                            <li>
                                <a class="dropdown-item" href="{{ url('/ubuntu') }}">Linux
                                    ubuntu</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/apache') }}">Apache</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/php') }}">php</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/mariadb') }}">MariaDB</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/phpmyadmin') }}">phpMyAdmin</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/pureftpd') }}">pureFTPD</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/realvnc') }}">RealVNC</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('/aapanel') }}">aaPanel</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Formulaire de recherche avec bouton -->
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search" />
                    <button class="btn btn-outline-danger" type="submit">Go</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Barre d'information-->
    <div class="info container-fluid">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <!-- Menu déroulant langues -->
            <div class="nav-item dropdown pb-1 d-flex align-items-center">
                <a class="nav-link active text-light dropdown-toggle" href="{{ url('/french') }}" id="dropdown03"
                    data-bs-toggle="dropdown" aria-expanded="false"><img class="flags pb-1"
                        src="frontend/img/flags/french.png" alt="Français" />&ensp;Français</a>
                <ul class="dropdown-menu dropdown-menu-dark rounded-0" aria-labelledby="dropdown03">
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="{{ url('/english') }}" target="_self"><img class="flags pb-1"
                                src="frontend/img/flags/english.png" alt="Anglais" />&ensp;Anglais</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="{{ url('/german') }}" target="_self"><img class="flags pb-1"
                                src="frontend/img/flags/germany.png" alt="Allemand" />&ensp;Allemand</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="{{ url('/spain') }}" target="_self"><img class="flags pb-1"
                                src="frontend/img/flags/spain.png" alt="Espagnol" />&ensp;Espagnol</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="{{ url('/italian') }}" target="_self"><img
                                class="flags pb-1" src="frontend/img/flags/italy.png"
                                alt="Italien" />&ensp;Italien</a>
                    </li>
                </ul>
            </div>
            <!-- Deuxième menu scrollable -->
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a class="nav-link px-2 text-light" href="{{ url('/forum') }}">Forum</a>
                </li>
                <li>
                    <a class="nav-link px-2 text-light" href="{{ url('/blog') }}">Blog</a>
                </li>
                <li>
                    <a class="nav-link px-2 text-light" href="{{ url('/faq') }}">FAQs</a>
                </li>
                <li>
                    <a class="nav-link px-2 text-light" href="{{ url('/about') }}">À Propos</a>
                </li>
            </ul>
            <!-- Nombre de membres connectés -->
            <div>
                <button type="button" class="btn btn-outline-light text-white position-relative me-4">
                    Membres connectés
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        99+
                    </span>
                </button>
            </div>
            <!-- Avatar du profil membre -->
            <div class="avatar dropdown text-end">
                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="frontend/img/admin.png" alt="Admin" width="48" height="48"
                        class="rounded-circle profile" />
                </a>
                <span id="status" class="p-1 bg-danger border border-light rounded-circle">
                </span>
                <!-- Menu de profil avec déclenchement de Offcanvas à droite position aside -->
                <ul class="dropdown-menu dropdown-menu-dark text-small rounded-0" aria-labelledby="dropdownUser1">
                    <li>
                        <button class="dropdown-item" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight1">
                            Supervision des serveurs
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2">
                            Participer au Forum
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight3" aria-controls="offcanvasRight3">
                            Gestion de mon compte
                        </button>
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Déconnexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<section class="sectionTwo">
    <!-- Texte du slider en accordéon sur les mobiles et tablettes en mode portrait -->
    <div class="accordion accordion-flush d-block d-lg-none d-md-block d-sm-block w-100" id="accordionHome">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-dark text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    L'association RaspDev c'est :
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionHome">
                <div class="accordion-body">
                    <div class="accordion-title">
                        La garantie de bénéficier d'...
                    </div>
                    <ul>
                        <li>Une communauté de passionnés,</li>
                        <li>D'un accompagnement total,</li>
                        <li>Du meilleur rapport qualité / Prix,</li>
                        <li>De préserver l'environnement</li>
                    </ul>
                    <p class="why">
                        <i class="fa-solid fa-arrow-down"></i>&nbsp;&nbsp;Découvrez
                        pourquoi ?&nbsp;&nbsp;<i class="fa-solid fa-arrow-down"></i>
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed bg-dark text-white" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo">
                    Hébergement Web Participatif
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionHome">
                <div class="accordion-body">
                    C'est parce que chacun y met du siens, que nous y arriverons
                    tous ensemble.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed bg-dark text-white" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                    aria-controls="collapseThree">
                    Hébergement Web Solidaire
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionHome">
                <div class="accordion-body">
                    La solidarité de nos membres fait de nos services les plus
                    efficaces du marché.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed rounded-0 bg-dark text-white" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                    aria-controls="collapseFour">
                    Hébergement Web Économique
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionHome">
                <div class="accordion-body border-bottom">
                    Franchement, ce n'est pas un Raspberry Pi qui va nous
                    ruiner.&nbsp;<i class="fa-solid fa-face-smile-wink"></i>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed rounded-0 bg-dark text-white" type="button"
                    data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                    aria-controls="collapseFive">
                    Hébergement Web Écologique
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                data-bs-parent="#accordionHome">
                <div class="accordion-body border-bottom">
                    Avec une faible consommation électrique nos infrastructures sont
                    proches du 0 émission de Co<sup>2</sup>.
                </div>
            </div>
        </div>
    </div>
</section>