<?php
session_start(); // On garde l'état du jeu dans la session

// --- Réinitialisation de la partie ---
if (isset($_POST['reset'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// --- Initialisation de la grille et du joueur ---
if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = array_fill(0, 9, '-'); // 9 cases vides
    $_SESSION['joueur'] = 'X'; // Le joueur X commence
}

// --- Si une case a été cliquée ---
if (isset($_POST['case'])) {
    $case = (int) $_POST['case'];

    // Si la case est vide, on joue le coup
    if ($_SESSION['grille'][$case] === '-') {
        $_SESSION['grille'][$case] = $_SESSION['joueur'];

        // Vérifie si le joueur actuel a gagné
        if (verifierGagnant($_SESSION['grille'], $_SESSION['joueur'])) {
            $message = $_SESSION['joueur'] . " a gagné !";
            session_destroy();
        }
        // Vérifie si la grille est pleine → match nul
        elseif (!in_array('-', $_SESSION['grille'])) {
            $message = "Match nul !";
            session_destroy();
        } else {
            // Sinon, on change de joueur
            $_SESSION['joueur'] = ($_SESSION['joueur'] === 'X') ? 'O' : 'X';
        }
    }
}

// --- Fonction qui vérifie si un joueur a gagné ---
function verifierGagnant($grille, $joueur)
{
    $gagnantes = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ];

    foreach ($gagnantes as $combo) {
        if (
            $grille[$combo[0]] === $joueur &&
            $grille[$combo[1]] === $joueur &&
            $grille[$combo[2]] === $joueur
        ) {
            return true;
        }
    }
    return false;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Morpion en PHP</title>
</head>
<body>

<h2>
<?php
if (isset($message)) {
    echo $message;
} else {
    echo "Au tour de " . $_SESSION['joueur'];
}
?>
</h2>

<form method="post">
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        $index = 0;
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td align='center'>";
                $val = $_SESSION['grille'][$index];
                if ($val === '-') {
                    echo '<button type="submit" name="case" value="' . $index . '">-</button>';
                } else {
                    echo $val;
                }
                echo "</td>";
                $index++;
            }
            echo "</tr>";
        }
        ?>
    </table>

    <br>
    <input type="submit" name="reset" value="Réinitialiser la partie">
</form>

</body>
</html>
