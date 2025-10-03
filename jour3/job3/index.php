<?php

$str="I'm sorry Dave I'm afraid I can't do that";
$voyelle= "aeiouyAEIOUY";

for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($voyelle, $str[$i]) !== false) {
        echo $str[$i];
    }
}
?>