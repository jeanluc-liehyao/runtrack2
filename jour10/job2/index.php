<?php


$servername = "localhost";
$username = "root";
$password = "root"; 
$database = "jour9";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connexion échouée : " . $conn->connect_error);
}

$sql = "SELECT nom, capacite FROM salles";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {

    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<thead><tr>";

    while ($field = $result->fetch_field()) {
        echo "<th>" . htmlspecialchars($field->name) . "</th>";
    }

    echo "</tr></thead><tbody>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }

    echo "</tbody></table>";
} else {
    echo "Aucune salle trouvée.";
}

$conn->close();
?>
