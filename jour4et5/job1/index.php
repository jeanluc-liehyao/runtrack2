<!DOCTYPE html>
<html>
<head>
    <title>Nombre d'arguments GET</title>
</head>
<body>
    <form method="get" action="">
        <label for="champ1">Champ 1:</label>
        <input type="text" name="champ1" id="champ1"><br>

        <label for="champ2">Champ 2:</label>
        <input type="text" name="champ2" id="champ2"><br>

        <label for="champ3">Champ 3:</label>
        <input type="text" name="champ3" id="champ3"><br>

        <input type="submit" value="Envoyer">
    </form>

    <?php
    $nombreArguments = count($_GET);
    echo "Le nombre d'argument GET envoyé est : " . $nombreArguments;
    ?>
</body>
</html>