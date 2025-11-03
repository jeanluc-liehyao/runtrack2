<?php
// Informations de connexion
$servername = "localhost";
$username = "root";
$password = "root"; // mets ton mot de passe si tu en as un
$dbname = "jour9";

try {
    // Création de la connexion PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données !<br><br>";
} 
catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// Requête SQL
$sql = "SELECT * FROM etudiants";
$stmt = $conn->query($sql);

// Vérifie s’il y a des résultats
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($rows) > 0) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<thead><tr>";

    // Affichage des noms de colonnes
    foreach (array_keys($rows[0]) as $colName) {
        echo "<th>" . htmlspecialchars($colName) . "</th>";
    }

    echo "</tr></thead><tbody>";

    // Affichage des données
    foreach ($rows as $row) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo "Aucun résultat trouvé.";
}

// Fermeture de la connexion (optionnelle avec PDO)
$conn = null;
?>

