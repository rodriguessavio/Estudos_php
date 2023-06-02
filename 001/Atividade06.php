<?php
$vetorA = [20,98.7 , 3.4, 45.7];
$vetorB = [4, 3, 2, 1];

for ($i = 0; $i < count($vetorA); $i++) {
    $soma = $vetorA[$i] + $vetorB[$i];
    echo "Execução número {$i}: ".$soma."<br>";
}

// echo $soma;

?>