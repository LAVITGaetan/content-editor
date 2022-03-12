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
    <title>Galerie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include_once('views/navbar.php');?>

<div class="galery-container">
    <div class="galery-left">
        <img src="assets/image-galery.png" alt="" class="galery-hero">
        <h2 class="galery-title">Galerie PNG</h2>
        <a href="galerie.php" class="index-card_link">Accéder à la galerie d'images</a>
    </div>
    <div class="galery-right">
    <img src="assets/pdf-galery.png" alt="" class="galery-hero">
        <h2 class="galery-title">Galerie PDF</h2>
        <a href="galerie.php" class="index-card_link">Accéder à la galerie de documents</a>
    </div>
</div>
   
</body>
</html>