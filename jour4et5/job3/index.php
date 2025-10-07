<!DOCTYPE html>
<html>
<head>
    <title>Compteur d'arguments POST</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="champ1"><br>
        <input type="text" name="champ2"><br>
        <input type="text" name="champ3"><br>
        <input type="submit" value="Envoyer">
    </form>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombreArguments = count($_POST);
        echo "Le nombre d'argument POST envoyé est : " . $nombreArguments;
    }
?>
</body>
</html>