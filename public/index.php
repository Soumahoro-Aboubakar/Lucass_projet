<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="homePage-header.css">
    <link rel="stylesheet" type="text/css" href="homePage-logosAnImages.css">
    <link rel="stylesheet" type="text/css" href="appFooter.css">
    <link rel="stylesheet" type="text/css" href="maintenance.css">
    <link rel="stylesheet" type="text/css" href="expertisefield.css">
    <link rel="stylesheet" type="text/css" href="nosProduits-extincteurs.css">
    <link rel="stylesheet" type="text/css" href="nosProduits-desenfumage.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <title>Index</title>
    <style>
        body {
            font-family: "Rubik", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: bold;
        }
        p{
            font-size: 19px;
        }
       strong {
        font-weight: 600;
        font-size: 18px;
       }
    </style>

</head>

<body>

    <?php
    require '../vendor/autoload.php';
    $router = new AltoRouter();
    $router->map('GET', '/', function () {
        echo '
        <script>
        document.title = "Acceuil";  
    </script>'; //permet de changer le titre de la page
        require '../pages/acceuilPage.php';
    });
    $router->map('GET', '/maintenance&support', function () {
        echo '
        <script>
        document.title = "maintenance&support";   
    </script>'; //permet de changer le titre de la page
        require '../pages/maintenance&supportPage.php';
    });

    $router->map('GET', '/domaine', function () {
        echo '
        <script>
        document.title = "Demaine";  
    </script>'; //permet de changer le titre de la page
        require '../pages/expertiseField.php';

    });
    $router->map('GET', '/contact', function () {
        echo '
    <script>
    document.title = "Contact";  
</script>';  //permet de changer le titre de la page
        require '../pages/contactPage.php';
    });
    $router->map('GET', '/espace-client', function () {

        require '../pages/espaceClient.php';
    });
    $router->map('GET', '/nos-produits', function () {
        $produit = isset($_GET['produit']) ? $_GET['produit'] : null;
        echo '<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nos Produits</title>
        <style>
            header {
                background-color: white;
            }
        </style>
    </head>
    <body>';
        echo '
    <script>
    document.title = "Nos produits";  
</script>'; //permet de changer le titre de la page
    
        require "../components/header.php";
        if ($produit === "extincteurs") {
            require '../components/produits/extincteurs.php';
        } elseif ($produit === "desenfumage") {
            require '../components/produits/desenfumage.php';
        } elseif ($produit === "signaletique") {
            require '../components/produits/signaletique.php';
        } elseif ($produit === "robinets_incendie_armées") {
            require '../components/produits/robinetsIncendieArmées.php';
        } elseif ($produit === "port_coupe_feu") {
            require '../components/produits/portCoupeFeu.php';
        } elseif ($produit === "accessoires") {
            require '../components/produits/accessoires.php';
        }
    });
    $match = $router->match();
    if ($match) {
        call_user_func($match['target'], ...$match['params']);
    } else {
        echo 'Page introuvable';
    }
    ?>
    <?php
    require "../components/footer.php";
    ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1500, // Durée de l'animation (en millisecondes)
            easing: 'ease-out-back', // Type d'accélération
            once: false // L'animation ne se répète pas
        });
    </script>
</body>

</html>