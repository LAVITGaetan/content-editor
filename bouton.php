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
    <h1 class="cta-title">Créer un bouton</h1>

    <div class="cta-editor_container">
        <div class="cta-editor_form">
            <div>
                <label class="cta-editor_label" for="">Texte du bouton</label>
                <input type="text" class="cta-editor_input">
            </div>
            <div>
                <label class="cta-editor_label" for="">Url du bouton</label>
                <input type="text" class="cta-editor_input">
            </div>
        </div>
        <div class="cta-editor_view">
            <div class="cta-editor_box"></div>
        </div>
        <div class="cta-editor_extra"></div>
    </div>
    <div class="cta-style_container">
        <h2 class="cta-style_title">Personalisation</h2>
        <div class="cta-style_flex">
            <div class="cta-style_flexContainer">
                <div class="cta-style_color" id="cta-style_color0"></div>
                <div class="cta-style_color" id="cta-style_color1"></div>
                <div class="cta-style_color" id="cta-style_color2"></div>
            </div>
            <div class="cta-style_flexSeparator"></div>
            <div class="cta-style_flexContainer">
                <div class="cta-style_radius" id="cta-style_radius0"></div>
                <div class="cta-style_radius" id="cta-style_radius1"></div>
                <div class="cta-style_radius" id="cta-style_radius2"></div>
            </div>
            <div class="cta-style_flexSeparator"></div>
            <div class="cta-style_flexContainer">
                <div class="cta-style_type">1</div>
                <div class="cta-style_type">2</div>
                <div class="cta-style_type">3</div>
            </div>

        </div>
    </div>

</body>

</html>