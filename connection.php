<?php
session_start();
if(isset($_SESSION['error_message'])) {
    echo $_SESSION['error_message'];
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-container">
        <h1 class="login-title">Outils de la CPME Réunion</h1>
        <form class="login-form" action="controllers/login.php" method="post">
            <div class="form-group">
                <label for="" class="form-label">Identifiant </label>
                <input type="text" name="pseudo" class="form-input" required>

            </div>
            <div class="form-group">
                <label for="" class="form-label">Mot de passe </label>
                <input type="text" name="password" class="form-input" required>

            </div>
            <button type="submit" name="submit" class="form-button">Se connecter</button>
        </form>

    </div>
    <div class="login-hero"></div>
</body>

</html>