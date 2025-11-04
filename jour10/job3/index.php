<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "jour9";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

$sql = "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>Prénom</th><th>Nom</th><th>Date de naissance</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row["prenom"]) . "</td><td>" . htmlspecialchars($row["nom"]) . "</td><td>" . htmlspecialchars($row["naissance"]) . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucune étudiante trouvée.";
}

$conn->close();
?>
