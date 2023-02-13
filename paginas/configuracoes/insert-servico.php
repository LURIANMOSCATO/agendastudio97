<?php


$servicos = mysqli_real_escape_string($conexao,$_POST["servico"]);
$sqlservico = "INSERT INTO servico (
  servicos
  )
  VALUES (
      '{$servicos}'
  )
  ";
  mysqli_query($conexao, $sqlservico) or die("Erro ao Executar a Consulta. " . mysqli_error($conexao));

  echo "O Registro foi Inserido com Êxito!";

?>