<header>
    <h3>Inserir Contato</h3>
</header>


<?php 

  $nomeContato = mysqli_real_escape_string($conexao,$_POST["nomeContato"]);
  $telefoneContato = mysqli_real_escape_string($conexao,$_POST["telefoneContato"]);
  $servicoContato = mysqli_real_escape_string($conexao,$_POST["servicoContato"]);
  $barbeiro = mysqli_real_escape_string($conexao,$_POST["barbeiro"]);
  $dataServico = mysqli_real_escape_string($conexao,$_POST["dataServico"]);
  $horaServico = mysqli_real_escape_string($conexao,$_POST["horaServico"]);
  $tempoServico = mysqli_real_escape_string($conexao,$_POST["tempoServico"]);
  $sql = "INSERT INTO tb_contatos (
    nomeContato,
    telefoneContato,
    servicoContato,
    barbeiro,
    dataServico,
    horaServico,
    tempoServico
    )
    VALUES (
        '{$nomeContato}',
        '{$telefoneContato}',
        '{$servicoContato}',
        '{$barbeiro}',
        '{$dataServico}',
        '{$horaServico}',
        '{$tempoServico}'
    )
    ";
    mysqli_query($conexao, $sql) or die("Erro ao Executar a Consulta. " . mysqli_error($conexao));

    echo "O Registro foi Inserido com Êxito!";

    ?>