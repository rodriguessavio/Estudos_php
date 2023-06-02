<?php
  $Pessoa = ['Nome' => 'Fulano', 'Idade' => 14, 'cidade' => 'São Paulo'];

  if ($Pessoa['Idade'] >= 18) {
    echo "Você é maior de idade, já tem ".$Pessoa['Idade'];
  } else {
    echo "Você é menor de idade, só tem ".$Pessoa['Idade'];
  }
?>