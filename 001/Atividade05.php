<?php

function calcular ($n1, $n2, $op) {
    switch ($op) {
        case 1:
            echo $n1 + $n2; 
            break;
        case 2:
            echo $n1 - $n2; 
            break;
        case 3:
            echo $n1 / $n2; 
            break;
        case 4:
            echo $n1 * $n2; 
            break;
        default:
            echo "Opção não existente";
    }
}

calcular(1, 2, 3);



?>