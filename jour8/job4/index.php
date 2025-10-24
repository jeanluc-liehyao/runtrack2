<?php

$cookie_duration = 60;

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    setcookie('prenom', $prenom, time() + $cookie_duration);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion avec Cookie</title>
</head>
<body>

<?php
if (isset($_COOKIE['prenom'])) {
    echo "<h2>Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " !</h2>";
    echo '<form method="post">
          <input type="submit" name="deco" value="deconnexion">
          </form>';
} else {
    echo '<form method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom">
            <input type="submit" name="connexion" value="connexion">
          </form>';
}
?>

</body>
</html>
