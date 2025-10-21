<?php

session_start();

if (isset($_POST['reset'])) {
    unset($_SESSION['nbvisites']);
}


if (isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites']++;
} else {
    $_SESSION['nbvisites'] = 1;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites avec session</title>
</head>
<body>
   
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>

    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
