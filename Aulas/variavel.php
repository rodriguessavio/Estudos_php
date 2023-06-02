<?php
// $num = 10;
// echo $num."<br>";
// $num = 20;
// echo $num;
// $$num = 40;
// echo "<br>".$$num;
// Variavel da variavel
$x = 'Nome';
$$x = 'savio';
echo $Nome;
//Variavel por referencia
$z = 20;
$y =& $z;
echo '<br>'.$y;
//Não importa, alterando o valor da referência ou da referênciada, ambas irão ter seu valor alterado

?>