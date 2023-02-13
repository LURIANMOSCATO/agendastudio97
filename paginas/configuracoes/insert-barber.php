<?php


$barbeiro = mysqli_real_escape_string($conexao,$_POST["barbeiro"]);
$sqlbarbeiro = "INSERT INTO barbeiro (
  barbeiro
  )
  VALUES (
      '{$barbeiro}'
  )
  ";
  mysqli_query($conexao, $sqlbarbeiro) or die("Erro ao Executar a Consulta. " . mysqli_error($conexao));

  echo "O Registro foi Inserido com Êxito!";

?>