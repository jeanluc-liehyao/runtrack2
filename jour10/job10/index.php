<?php
$server = "localhost";
$user = "root";
$password = "root";
$dbname = "jour9";

$conn = new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

$sql = "SELECT * FROM salles ORDER BY capacite ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>";
    foreach ($result->fetch_fields() as $field) {
        echo "<th>" . $field->name . "</th>";
    }
    echo "</tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucune salle trouvée.";
}

$conn->close();
?>
