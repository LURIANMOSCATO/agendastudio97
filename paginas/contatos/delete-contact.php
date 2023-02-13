<header>
    <h3>Serviço Concluído</h3>
</header>

<?php


$idContato = mysqli_real_escape_string($conexao, $_GET["idContato"]);
$sql = "DELETE FROM tb_contatos WHERE idContato= '{$idContato}'";

mysqli_query($conexao, $sql) or die("Erro ao Excluir o Registro! " . mysqli_error($conexao));

echo "Serviço Finalizado e Removido da Nossa Agenda!";
?>