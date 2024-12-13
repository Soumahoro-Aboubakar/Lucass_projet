<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Accueil</title>
    <style>
        .headerStyle {
            z-index: 4;
            position: fixed;
            width: 100vw;
            top: 0px;
            right: 0px;
            left: 0px;
            background-color:white;
            
        }
    </style>
</head>

<body>
    <div class="headerStyle">
        <?php
        require "../components/header.php";
        ?>
    </div>

    <div class="homePage-header"> <?php

    require "../components/acceuil/subHeader.php";
    ?></div>
    <div>
        <?php require "../components/acceuil/logosAndImages.php";
        ?>
    </div>
    <script src="script.js"></script>
</body>

</html>