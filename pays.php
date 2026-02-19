<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pays de l'Union Africaine - Toutel'afrique.ua</title>
    <meta name="description" content="Decouvrez les 55 pays membres de l'Union Africaine avec notre carte interactive.">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700;900&family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="src/styles.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <div class="header-row d-flex align-items-center justify-content-between w-100">
                    <!-- Logo à gauche -->
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <div class="logo">
                            <span class="logo-toute">toute</span>
                            <span class="logo-afrique">l'afrique</span>
                        </div>
                    </a>

                    <!-- Navigation au centre -->
                    <div class="header-nav d-none d-lg-flex mx-auto">
                        <a href="#" class="nav-item-link">Themes</a>
                        <a href="pays.html" class="nav-item-link active">Pays Africains</a>
                        <a href="#" class="nav-item-link">L'Afrique Pratique</a>
                        <a href="a-propos.html" class="nav-item-link">Qui sommes-nous</a>
                        <a href="#" class="nav-item-link">Newsletter</a>
                    </div>

                    <!-- Recherche et mode sombre à droite -->
                    <div class="header-right d-flex align-items-center">
                        <div class="search-box d-none d-md-flex align-items-center me-2">
                            <input type="text" class="search-input form-control" placeholder="Rechercher..." id="headerSearchInput">
                            <button class="search-btn btn btn-link p-0" type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                        <button class="btn btn-link search-toggle-mobile d-md-none p-0 me-2" type="button" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="bi bi-search"></i>
                        </button>
                        <button class="btn btn-link p-0 dark-mode-toggle me-2" type="button" title="Mode sombre">
                            <i class="bi bi-moon-fill"></i>
                        </button>
                        <button class="btn btn-link menu-toggle d-lg-none p-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#sideMenu">
                            <i class="bi bi-list"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Side Menu Offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sideMenu">
        <div class="offcanvas-header">
            <div class="logo">
                <span class="logo-toute">toute</span>
                <span class="logo-afrique">l'afrique</span>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column menu-nav">
                <li class="nav-item"><a class="nav-link" href="index.html">Accueil</a></li>
                <li class="nav-item"><a class="nav-link active" href="pays.html">Pays de l'UA</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Actualite</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Economie et social</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Environnement</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Histoire</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Institutions</a></li>
            </ul>
        </div>
    </div>

    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title">Rechercher sur Toutel'afrique.ua</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-4">
                    <form class="search-form" id="searchForm">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" id="searchInput" placeholder="Rechercher un article, un pays, un theme...">
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                    <div id="searchResults" class="search-results mt-4"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="countries-hero py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Les pays de l'Union Africaine</h1>
                    <p class="hero-description">L'Union africaine compte 55 Etats membres. Decouvrez chaque pays a travers notre carte interactive : donnees cles, histoire, actualite et relations avec l'UA.</p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">55</span>
                            <span class="stat-label">Pays membres</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">1.4</span>
                            <span class="stat-label">Milliard d'habitants</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">30M</span>
                            <span class="stat-label">km² de superficie</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="region-filter">
                        <h4>Filtrer par region</h4>
                        <div class="filter-buttons">
                            <button class="filter-btn active" data-region="all">Toutes</button>
                            <button class="filter-btn" data-region="north">Afrique du Nord</button>
                            <button class="filter-btn" data-region="west">Afrique de l'Ouest</button>
                            <button class="filter-btn" data-region="central">Afrique Centrale</button>
                            <button class="filter-btn" data-region="east">Afrique de l'Est</button>
                            <button class="filter-btn" data-region="south">Afrique Australe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Map Section -->
    <section class="map-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="map-container" id="mapContainer">
                        <object type="image/svg+xml" data="africa-map.svg" id="africaMapObject" class="africa-map-svg">
                            Votre navigateur ne supporte pas les SVG
                        </object>

                        <!-- Country Info Tooltip -->
                        <div id="countryTooltip" class="country-tooltip">
                            <div class="tooltip-flag">
                                <img id="tooltipFlag" src="" alt="">
                            </div>
                            <h4 id="tooltipName"></h4>
                            <div class="tooltip-info">
                                <p><strong>Capitale:</strong> <span id="tooltipCapital"></span></p>
                                <p><strong>Population:</strong> <span id="tooltipPopulation"></span></p>
                                <p><strong>Region:</strong> <span id="tooltipRegion"></span></p>
                            </div>
                            <a href="" class="btn btn-sm btn-primary">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="country-list-panel">
                        <h3>Liste des pays</h3>
                        <input type="text" id="countrySearch" class="form-control mb-3" placeholder="Rechercher un pays...">
                        <div class="country-list" id="countryList">
                            <!-- Countries will be populated by JS -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Regional Organizations -->
    <section class="organizations-section py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center mb-5">Les organisations regionales</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="org-card">
                        <div class="org-icon"><i class="bi bi-globe-africa"></i></div>
                        <h3>CEDEAO</h3>
                        <p>Communaute economique des Etats de l'Afrique de l'Ouest - 15 pays membres</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Decouvrir</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="org-card">
                        <div class="org-icon"><i class="bi bi-diagram-3"></i></div>
                        <h3>SADC</h3>
                        <p>Communaute de developpement de l'Afrique australe - 16 pays membres</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Decouvrir</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="org-card">
                        <div class="org-icon"><i class="bi bi-building"></i></div>
                        <h3>CEMAC</h3>
                        <p>Communaute economique et monetaire de l'Afrique centrale - 6 pays membres</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Decouvrir</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="org-card">
                        <div class="org-icon"><i class="bi bi-compass"></i></div>
                        <h3>EAC</h3>
                        <p>Communaute de l'Afrique de l'Est - 7 pays membres</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Decouvrir</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="org-card">
                        <div class="org-icon"><i class="bi bi-flag"></i></div>
                        <h3>UMA</h3>
                        <p>Union du Maghreb arabe - 5 pays membres</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Decouvrir</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="org-card">
                        <div class="org-icon"><i class="bi bi-stars"></i></div>
                        <h3>IGAD</h3>
                        <p>Autorite intergouvernementale pour le developpement - 8 pays membres</p>
                        <a href="#" class="btn btn-outline-primary btn-sm">Decouvrir</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo mb-4">
                        <span class="logo-toute" style="color: #E67E22;">toute</span>
                        <span class="logo-afrique" style="color: #E67E22;">l'afrique</span>
                    </div>
                    <p class="footer-desc">Le site de reference sur les questions africaines.</p>
                </div>
                <div class="col-md-2">
                    <h4 class="footer-title">Navigation</h4>
                    <ul class="footer-links">
                        <li><a href="#">Tourisme durable pour le développement</a></li>
                        <li><a href="#">Economie et social</a></li>
                        <li><a href="#">Environnement</a></li>
                        <li><a href="#">Culture</a></li>
                        <li><a href="#">Sport</a></li>
                        <li><a href="#">Institutions</a></li>
                        <li><a href="#">L'Afrique et le monde</a></li>
                        <li><a href="#">Societe</a></li>
                        <li><a href="#">Loisirs et découverte</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h4 class="footer-title">Themes</h4>
                    <ul class="footer-links">
                        <li><a href="#">Economie</a></li>
                        <li><a href="#">Politique</a></li>
                        <li><a href="#">Environnement</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4 class="footer-title">Contact</h4>
                    <ul class="footer-links">
                        <li><a href="#">Nous contacter</a></li>
                        <li><a href="#">Mentions legales</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom mt-5 pt-4 border-top">
                <p class="mb-0 text-center">&copy; 2026 Toutel'afrique.ua - Tous droits reserves</p>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="src/main.js"></script>
    <!-- Map JS -->
    <script src="src/map.js"></script>
</body>
</html>
