<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "jour9";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

$sql = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>nb_etudiants</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row["nb_etudiants"]) . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}

$conn->close();
?>