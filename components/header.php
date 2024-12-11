<header class="header">
    <div class="logo">
        <a href="index.php">
            <img src="./assets/logos/logo.png" alt="logo">
        </a>
    </div>
    <script>
        function toggleMenu() {
            const mobileMenu = document.getElementById("mobile-menu");
            mobileMenu.classList.toggle("active");
        }

    </script>
    <nav>
        <ul class="menu">
            <li><a href="/">Accueil</a></li>
            <li class="dropdown">
                <a href="#" class="nos-produits">Nos produits</a>
                <ul class="submenu">
                    <li><a href="/nos-produits?produit=extincteurs">Extincteurs</a></li>
                    <li><a href="/nos-produits?produit=desenfumage">Désenfumage</a></li>
                    <li><a href="/nos-produits?produit=signaletique">Signalétiques</a></li>
                    <li><a href="/nos-produits?produit=robinets_incendie_armées">Robinets d'incendie armées</a></li>
                    <li><a href="/nos-produits?produit=port_coupe_feu">Portes coupe-feu</a></li>
                    <li><a href="/nos-produits?produit=accessoires">Accessoires</a></li>
                </ul>
            </li>
            <li><a href="/domaine">Domaine d'expertise</a></li>
            <li><a href="/maintenance&support">Maintenance & suivi</a></li>
            <li><a href="/espace-client">Espace client</a></li>
            <li><a href="/contact">Nous contacter</a></li>
        </ul>
    </nav>
    <div class="btn-right" onclick="toggleMenu()">
        <img src="./assets/hamburger/hamburger.png" alt="btn-option">
    </div>
</header>
<div id="mobile-menu" class="mobile-menu">
    <ul>
        <li><a href="/" class="nav-item">Accueil</a></li>
        <li class="dropdown">
            <a href="#" class="nav-item bottom-icon-container"><span>Nos produits <img src="./assets/icon/bottomIcon.png" alt="bottom-icon"></span></a>
            <ul class="submenu">
                <li><a href="/nos-produits?produit=extincteurs">Extincteurs</a></li>
                <li><a href="/nos-produits?produit=desenfumage">Désenfumage</a></li>
                <li><a href="/nos-produits?produit=signaletique">Signalétiques</a></li>
                <li><a href="/nos-produits?produit=robinets_incendie_armées">Robinets d'incendie armées</a></li>
                <li><a href="/nos-produits?produit=port_coupe_feu">Portes coupe-feu</a></li>
                <li><a href="/nos-produits?produit=accessoires">Accessoires</a></li>
            </ul>
        </li>
        <li><a href="/domaine" class="nav-item">Domaine d'expertise</a></li>
        <li><a href="/maintenance&support" class="nav-item">Maintenance & suivi</a></li>
        <li><a href="/espace-client" class="nav-item">Espace client</a></li>
        <li><a href="/contact" class="nav-item">Nous contacter</a></li>
    </ul>
    <div class="contact-info">
        <p>0495307089</p>
        <p>contact@serdef-incendie.com</p>
        <p>1 ZAC campo vallone Lot numero</p>
        <p>20620  Bingulia</p>
    </div>
</div>