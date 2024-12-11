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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Index</title>
</head>

<body>
    <?php
    require '../vendor/autoload.php';
    $router = new AltoRouter();
    $router->map('GET', '/', function () {
        require '../pages/acceuilPage.php';
    });
    $router->map('GET', '/maintenance&support', function () {
        require '../pages/maintenance&supportPage.php';
    });

    $router->map('GET', '/domaine', function () {
        require '../pages/expertiseField.php';
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
</body>

</html>