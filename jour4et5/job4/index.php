<!DOCTYPE html>
<html>
<head>
    <title>Affichage des arguments POST</title>
</head>
<body>
    <form method="POST" action="">
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom"><br>
        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom"><br>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
        echo '<table>';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';
        foreach ($_POST as $argument => $valeur) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($argument) . '</td>';
            echo '<td>' . htmlspecialchars($valeur) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</body>
</html>
