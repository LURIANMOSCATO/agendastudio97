<?php
include("configuration.php");

$conexao = mysqli_connect(SERVER,USER,PASSWORD,DATABASE) or die ("Erro ao configurar conectar com o Banco de Dados!" . mysqli_connect_error());
?>