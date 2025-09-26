<?php

$bool= true;
$str="Hello la Plateforme";
$int= 3;
$float= 3.3;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau</title>
</head>

<body>
<table border="1">
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>boolean</td>
        <td>boolean</td>
        <td><?=($bool? 'true': 'false');?></td>
        </tr>
        <tr>
        <td>entier</td>
        <td>entier</td>
        <td><?=$int;?></td>
        </tr>
        <tr>
        <td>string</td>
        <td>string</td>
        <td><?=$str;?></td>
        </tr>
        <tr>
        <td>float</td>
        <td>float</td>
        <td><?=$float;?></td>
        </tr>
    </tbody>

</table>
    
</body>
</html>