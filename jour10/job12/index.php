<?php
$server = "localhost";
$user = "root";
$password = "root";
$dbname = "jour9";

$conn = new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

$sql = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>prenom</th><th>nom</th><th>naissance</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['prenom'] . "</td><td>" . $row['nom'] . "</td><td>" . $row['naissance'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucun étudiant trouvé.";
}

$conn->close();
?>
