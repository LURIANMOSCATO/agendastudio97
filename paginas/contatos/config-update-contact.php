<header>
    <h3>Atualizar Serviços</h3>
</header>


<?php

  $idContato = mysqli_real_escape_string($conexao,$_POST["idContato"]);
  $nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]);
  $telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);
  $servicoContato = mysqli_real_escape_string($conexao,$_POST["servicoContato"]);
  $barbeiro = mysqli_real_escape_string($conexao,$_POST["barbeiro"]);
  $dataServico = mysqli_real_escape_string($conexao,$_POST["dataServico"]);
  $horaServico = mysqli_real_escape_string($conexao,$_POST["horaServico"]);
  $tempoServico = mysqli_real_escape_string($conexao,$_POST["tempoServico"]);
  $sql = "UPDATE tb_contatos SET
  nomeContato = '{$nomeContato}',
  telefoneContato = '{$telefoneContato}',
  servicoContato = '{$servicoContato}',
  barbeiro = '{$barbeiro}',
  dataServico =' {$dataServico}',
  horaServico = '{$horaServico}',
  tempoServico = '{$tempoServico}'
  WHERE idContato = '{$idContato}'
  ";
    mysqli_query($conexao, $sql) or die("Erro ao Executar a Consulta. " . mysqli_error($conexao));

    echo "O Registro Foi Atualizado!";

    ?>