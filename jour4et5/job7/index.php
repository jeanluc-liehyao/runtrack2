<?php
$maisonLargeur     = 0;   
$maisonHauteur     = 0;   
$numeroLigneToit   = 0;
$espacesAvantToit  = 0;
$remplissageToit   = 0;
$numeroLigneMur    = 0;
$positionMur       = 0;

if (isset($_GET['largeur']) && isset($_GET['hauteur'])) {
    $maisonLargeur = (int) $_GET['largeur'];
    $maisonHauteur = (int) $_GET['hauteur'];
    if ($maisonLargeur > 1 && $maisonHauteur > 1) {
        $toitBaseInterieure = 2 * ($maisonHauteur - 1);
        $paddingGaucheToit = 0;
        if ($maisonLargeur > $toitBaseInterieure) {
            $paddingGaucheToit = intdiv($maisonLargeur - $toitBaseInterieure, 2);
        }
        echo "<pre>"; 
        // --- TOIT ---
        for ($numeroLigneToit = 0; $numeroLigneToit < $maisonHauteur; $numeroLigneToit++) {
            
            for ($espacesAvantToit = 0; $espacesAvantToit < $paddingGaucheToit + ($maisonHauteur - 1 - $numeroLigneToit); $espacesAvantToit++) {
                echo " ";
            }
            // Bord gauche
            echo "/";
            for ($remplissageToit = 0; $remplissageToit < 2 * $numeroLigneToit; $remplissageToit++) {
                echo "_"; 
            }
            // Bord droit
            echo "\\";

            echo "\n";
        }
        // --- MURS ---
        for ($numeroLigneMur = 0; $numeroLigneMur < $maisonHauteur; $numeroLigneMur++) {
            echo "|";
            for ($positionMur = 0; $positionMur < $maisonLargeur; $positionMur++) {
                if ($numeroLigneMur == $maisonHauteur - 1) {
                    echo "_"; // sol
                } else {
                    echo " "; 
                }
            }
            echo "|\n";
        }
        echo "</pre>";
    } else {
        echo "";
    }
}
?>
<form method="get">
    <label for="largeur">Largeur :</label>
    <input type="text" name="largeur" id="largeur"><br><br>

    <label for="hauteur">Hauteur :</label>
    <input type="text" name="hauteur" id="hauteur"><br><br>

    <input type="submit" value="Construire la maison">
</form>


