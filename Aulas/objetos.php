<?php
    class Pessoa {
        function falar(){
            echo "Olá, bom dia" ;
        }
    }
    $matheus = new Pessoa();
    $matheus->nome = "Matheus";
    echo $matheus->nome;
    echo '<br>';
    echo $matheus->falar();
?>