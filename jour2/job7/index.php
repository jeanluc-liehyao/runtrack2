<?php
$hauteur = 5; 

for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $hauteur - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    if ($i < $hauteur) {
        echo "/";
    } else {
        echo "/";
    }
    if ($i == $hauteur) {
        for ($k = 1; $k <= (2 * $i - 2); $k++) {
            echo "_";
        }
    } else {
        for ($k = 1; $k <= (2 * $i - 2); $k++) {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "\\";  
    echo "<br />";
}
?>