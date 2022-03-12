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
    <title>Composant</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="component-body">
    <?php include_once('views/navbar.php'); ?>
    <h1 class="component-title">Récupérer un composant</h1>

    <div class="component-container">
        <div onclick="document.location.assign('bouton.php')" class="component-card">
            <div class="component-card_header">
            <img src="assets/cta.png" alt="" class="component-card_icon">
            <h2 class="component-card_title">Bouton d'action</h2>
            </div>
            <p class="component-card_text">Associer une action a un bouton et le modifier visuellement.</p>
        </div>
        <div class="component-card">
            <div class="component-card_header">
            <img src="assets/image.png" alt="" class="component-card_icon">
            <h2 class="component-card_title">Image et vidéos</h2>
            </div>
            <p class="component-card_text">Choisir une image ou une vidéo et récupérer son composant.</p>
        </div>
        <div class="component-card">
            <div class="component-card_header">
            <img src="assets/design.png" alt="" class="component-card_icon">
            <h2 class="component-card_title">Elements graphiques</h2>
            </div>
            <p class="component-card_text">Elements visuels pour améliorer l’experience utilisateur.</p>
        </div>
    </div>


    
</body>

</html>