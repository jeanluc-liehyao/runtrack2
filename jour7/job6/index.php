<?php

function leetSpeak($str){
    $leet =['a'=> 4,
            'b'=> 8,
            'e'=> 3,
            'g'=> 6,
            'l'=> 1,
            's'=> 5,
            't'=> 7 ];
    return str_ireplace(array_keys($leet), array_values($leet), $str);
}

echo leetSpeak("Spider-man");

?>