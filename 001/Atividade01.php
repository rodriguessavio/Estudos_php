<?php
$val = -90;
$resultado = "";

if ($val > 0) {
    $resultado = "Valor maior que zero";
} else if ($val < 0) {
    $resultado = "Valor menor que zero";
} else {
    $resultado = "Valor igual a zero";
}

echo $resultado;

?>