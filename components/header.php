<header class="header" data-aos="fade-down">
    <div class="logo">
        <a href="index.php">
            <img src="./assets/logos/logo.png" alt="logo">
        </a>
    </div>
    
    <script>
        function toggleMenu() {
            const mobileMenu = document.getElementById("mobile-menu");
            const btnRight = document.querySelector(".btn-right");

            if (!btnRight.classList.contains("active")) {
                mobileMenu.style.display = "block"; 
                setTimeout(() => {
                    mobileMenu.classList.add("active");
                }, 10); 
            } else {
                mobileMenu.classList.remove("active");
                setTimeout(() => {
                    mobileMenu.style.display = "none";
                }, 300); 
            }

            btnRight.classList.toggle("active");
        }
    </script>
    <nav>
        <ul class="menu">
            <li><a href="/" data-aos="fade-up">Accueil</a></li>
            <li class="dropdown" data-aos="fade-up" data-aos-delay="100">
                <a href="#" class="nos-produits" id="nos-produits">Nos produits</a>
                <ul class="submenu">
                    <li><a href="/nos-produits?produit=extincteurs">Extincteurs</a></li>
                    <li><a href="/nos-produits?produit=desenfumage">Désenfumage</a></li>
                    <li><a href="/nos-produits?produit=signaletique">Signalétiques</a></li>
                    <li><a href="/nos-produits?produit=robinets_incendie_armées">Robinets d'incendie armées</a></li>
                    <li><a href="/nos-produits?produit=port_coupe_feu">Portes coupe-feu</a></li>
                    <li><a href="/nos-produits?produit=accessoires">Accessoires</a></li>
                </ul>
            </li>
            <li><a href="/domaine" data-aos="fade-up" data-aos-delay="200">Domaine d'expertise</a></li>
            <li><a href="/maintenance&support" data-aos="fade-up" data-aos-delay="300">Maintenance & suivi</a></li>
            <li><a href="/espace-client" data-aos="fade-up" data-aos-delay="400">Espace client</a></li>
            <li><a href="/contact" data-aos="fade-up" data-aos-delay="500">Nous contacter</a></li>
        </ul>
    </nav>
    <div class="btn-right" onclick="toggleMenu()" data-aos="zoom-in">
        <div class="hamburger">
            <img src="./assets/hamburger/hamburger.png" alt="btn-option">
        </div> 
        <div class="cross">
            <span class="line line1"></span>
            <span class="line line2"></span>
        </div>
    </div>
</header>
<div id="mobile-menu" class="mobile-menu">
    <ul>
        <li><a href="/" class="nav-item">Accueil</a></li>
        <li class="dropdown">
            <a href="#" class="nav-item bottom-icon-container"><span>Nos produits <img
                        src="./assets/icon/bottomIcon.png" alt="bottom-icon"></span></a>
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
        <p>20620 Bingulia</p>
    </div>
</div>
<style>
    /* Le style présent ici correspond uniquement à la gestion de  la section menu. Pour autres les classe veuillez consulter le fichier homePage-header.css (dans le dossier public) */
    .btn-right {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 60px;
        height: 60px;
        cursor: pointer;
    }

    .hamburger, .cross {
        display: none;
    }

    .hamburger img {
        width: 100%;
        height: auto;
    }

    .btn-right:not(.active) .hamburger {
        display: block;
    }

    .btn-right.active .cross {
        display: flex;
    }

    .cross {
        position: relative;
        width: 50px;
        height: 50px;
        justify-content: center;
        align-items: center;
    }

    .line {
        position: absolute;
        width: 100%;
        height: 4px;
        background-color: #333;
    }

    .line1 {
        top: 15px;
    }

    .line2 {
        top: 30px;
    }

    @keyframes rotateLine1 {
        0% {
            transform: rotate(0deg);
            top: 15px;
        }
        100% {
            transform: rotate(45deg);
            top: 22px;
        }
    }

    @keyframes rotateLine2 {
        0% {
            transform: rotate(0deg);
            top: 30px;
        }
        100% {
            transform: rotate(-45deg);
            top: 22px;
        }
    }

    
    .btn-right.active .line1 {
        animation: rotateLine1 0.5s ease forwards; 
    }

    .btn-right.active .line2 {
        animation: rotateLine2 0.5s ease forwards; 
    }
    @keyframes slideIn {
        0% {
            opacity: 0;
            transform: translateX(200px);
        }
        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideOut {
        0% {
            opacity: 1;
            transform: translateX(0);
        }
        100% {
            opacity: 0;
            transform: translateX(200px);
        }
    }

    #mobile-menu {
        display: none;
        animation: slideOut 1s ease forwards; 
    }

    #mobile-menu.active {
        display: block;
        animation: slideIn 1s ease forwards;
    }


   
</style>
