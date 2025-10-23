<?php
function calcule($a,$operation,$b){
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "IMPOSSIBLE : division par zéro";
            }
            return $a / $b;
        case '%':
            if ($b == 0) {
                return "IMPOSSIBLE : modulo par zéro";
            }
            return $a % $b;
        default:
            return "Opération non reconnue";
    }
}

echo calcule(1,"+",1);
?>
