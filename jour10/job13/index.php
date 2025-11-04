<?php
$server = "localhost";
$user = "root";
$password = "root";
$dbname = "jour9";

$conn = new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

$sql="SELECT etages.nom AS nom_etage, salles.nom AS nom_salle FROM salles JOIN etages ON salles.id_etage = etages.id";
$result= $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>nom_salle</th><th>nom_etage</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['nom_salle'] . "</td><td>" . $row['nom_etage'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucune donnée trouvée.";
}

$conn->close();