<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$newStr = '';
$length = mb_strlen($str);
$firstChar = mb_substr($str, 0, 1);
$firstCharLower = mb_strtolower($firstChar);


for ($i = 1; $i < $length; $i++) {
    $newStr .= mb_substr($str, $i, 1);
}

$newStr = mb_strtoupper(mb_substr($newStr, 0, 1)) . mb_substr($newStr, 1);
$newStr .= $firstCharLower;

echo $newStr;
?>
