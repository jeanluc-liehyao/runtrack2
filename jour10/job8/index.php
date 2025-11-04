<?php

$server="localhost";
$user="root";
$password="root";
$dbname="jour9";

$conn= new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error){
    die("Erreur de connexion :". $conn->connect_error);
}

$sql="SELECT SUM(capacite) AS capacite_totale FROM salles;";
$result= $conn->query($sql);

if ($result->num_rows > 0){
    if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr><th>capacite_totale</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . htmlspecialchars($row["capacite_totale"]) . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucune donnée trouvée.";
}

}

$conn ->close();


?>