<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    "consonnes" => 0,
    "voyelles" => 0
];

$voyelles = ['a', 'e', 'i', 'o', 'u', 'y'];
$str = mb_strtolower($str);

for ($i = 0; $i < mb_strlen($str); $i++) {
    $char = $str[$i];

    if (ctype_alpha($char)) {
        if (in_array($char, $voyelles)) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>tableau</title>
</head>
<body>
    <h2>Résultat du comptage</h2>
    <table border = 1px>
        <thead>
            <tr>
                <th>Consonnes</th>
                <th>Voyelles</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $dic["consonnes"] ?></td>
                <td><?= $dic["voyelles"] ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
