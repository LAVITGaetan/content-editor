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
    <title>Image et Vidéo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="component-body">
    <?php include_once('views/navbar.php'); ?>
    <h1 class="imv-title">Créer une image</h1>

    <div class="imv-editor_container">
        <div class="imv-editor_form">
            <div>
                <label class="imv-editor_label" for="">Url de l'image</label>
                <input type="text" class="imv-editor_input">
            </div>
            <div>
                <button class="imv-editor_button">Ouvrir la galerie</button>
            </div>
        </div>
        <div class="imv-editor_view">
            <div class="imv-editor_box"></div>
        </div>
        <div class="imv-editor_extra">
        <button class="imv-editor_button">Créer une vidéo</button>
        </div>
    </div>
    <div class="imv-style_container">
        <h2 class="imv-style_title">Personalisation</h2>
        <div class="imv-style_flex">
            <div class="imv-style_flexContainer">
                <div class="imv-style_color" id="imv-style_color0"></div>
                <div class="imv-style_color" id="imv-style_color1"></div>
                <div class="imv-style_color" id="imv-style_color2"></div>
            </div>
            <div class="imv-style_flexSeparator"></div>
            <div class="imv-style_flexContainer">
                <div class="imv-style_radius" id="imv-style_radius0"></div>
                <div class="imv-style_radius" id="imv-style_radius1"></div>
                <div class="imv-style_radius" id="imv-style_radius2"></div>
            </div>
            <div class="imv-style_flexSeparator"></div>
            <div class="imv-style_flexContainer">
                <div class="imv-style_type">1</div>
                <div class="imv-style_type">2</div>
                <div class="imv-style_type">3</div>
                <div class="imv-style_type">4</div>
            </div>

        </div>
    </div>

</body>

</html>