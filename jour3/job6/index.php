<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
$rstr = '';
$length = mb_strlen($str);

for ($i = $length - 1; $i >= 0; $i--) {
    $rstr .= mb_substr($str, $i, 1);
}
echo $rstr;
?>
