<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
        if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }

        $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des prénoms</title>
</head>
<body>
    <form method="post">
        <label>Prénom :
            <input type="text" name="prenom"ù>
        </label>
        <input type="submit" value="Envoyer">
        <button type="submit" name="reset">RESET</button>
    </form>

    <h2>Liste des prénoms enregistrés :</h2>
    <ul>
        <?php
        if (!empty($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $p) {
                echo "<li>" . htmlspecialchars($p) . "</li>";
            }
        } else {
            echo "<li>Aucun prénom enregistré.</li>";
        }
        ?>
    </ul>
</body>
</html>
