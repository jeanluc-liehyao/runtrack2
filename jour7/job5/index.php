<?php

function occurrences($str,$char){

    return substr_count($str,$char);
}

$str="Bonjour";
$char="o";

echo occurrences($str,$char);
?>