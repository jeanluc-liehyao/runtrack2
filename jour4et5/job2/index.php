<!DOCTYPE html>
<html>
<head>
    <title>Afficher les arguments GET</title>
</head>
<body>
    <form method="get" action="">
        <label>Prénom: <input type="text" name="prenom"></label><br>
        <label>Nom: <input type="text" name="nom"></label><br>
        <input type="submit" value="Envoyer">
    </form>

    <table border="1">
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
        <?php
        foreach ($_GET as $argument => $valeur) {
            echo "<tr><td>" . htmlspecialchars($argument) ."</td><td>". htmlspecialchars($valeur) ." </td></tr>";
        }
        ?>
    </table>
</body>
</html>
