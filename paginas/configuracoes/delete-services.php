<?php
$id = mysqli_real_escape_string($conexao, $_GET["servicos"]);
$sql = "DELETE FROM servico WHERE servicos= '{$id}'
";

mysqli_query($conexao, $sql) or die("Erro ao Excluir o Registro! " . mysqli_error($conexao));

echo "Serviço Removido da Nossa Agenda!";

?>