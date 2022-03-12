<?php
session_start();
include_once('controllers/authentication.php')
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include_once('views/navbar.php');?>

    <h1 class="index-title">Bienvenue sur votre espace personel</h1>
    <div class="index-container">
        <div class="index-card">
            <div class="index-card_hero" id="index-card_hero1"></div>
            <p class="index-card_text">Récupérer un élément à insérer dans l’ application</p>
            <a href="composant.php" class="index-card_link">Go</a>
        </div>

        <div class="index-card">
            <div class="index-card_hero" id="index-card_hero2"></div>
            <p class="index-card_text">Rédiger un article pour l’application ou le site</p>
            <a href="contenu.php" class="index-card_link">Go</a>
        </div>

        <div class="index-card">
            <div class="index-card_hero" id="index-card_hero3"></div>
            <p class="index-card_text">Accéder à la galerie d’images et de documents PDF</p>
            <a href="galerie.php" class="index-card_link">Go</a>
        </div>
    </div>
</body>
</html>