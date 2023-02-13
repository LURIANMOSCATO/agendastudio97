<?php
$id = mysqli_real_escape_string($conexao, $_GET["barbeiro"]);
$sql = "DELETE FROM barbeiro WHERE barbeiro= '{$id}'
";

mysqli_query($conexao, $sql) or die("Erro ao Excluir o Registro! " . mysqli_error($conexao));

echo "Serviço Removido da Nossa Agenda!";

?>