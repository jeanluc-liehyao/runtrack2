<?php

if (isset($_POST['reset'])) {
    setcookie('nbvisites', '', time() - 3600); 
    $nbvisites = 0;
} else {
    if (isset($_COOKIE['nbvisites'])) {
        $nbvisites = $_COOKIE['nbvisites'] + 1;
    } else {
        $nbvisites = 1;
    }
    setcookie('nbvisites', $nbvisites, time() + 3600);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites avec cookie</title>
</head>
<body>

    <p>Nombre de visites : <?php echo isset($nbvisites) ? $nbvisites : 0; ?></p>

    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>

</body>
</html>
