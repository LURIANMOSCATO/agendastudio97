<?php

$idContato = $_GET["idContato"];

$sql = "SELECT * FROM tb_contatos WHERE idContato= {$idContato}";
$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados de registro. " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);

?>

<link rel="stylesheet" href="css/att.css">

<div class="wraper">

    <a href="#demo-modal">
        <h1>EDITAR</h1>
    </a>

    <a href="index.php?menuop=contatos">
        <h1>Voltar</h1>
    </a>

    <form class="search" action="index.php?menuop=contatos" method="post">

    
    <span class="clear" onclick="document.getElementById('mysearch').value = ''"></span>
    
</form>
<div id="demo-modal" class="modal"> 

<div class="modal-content">
<div class="tittle">Editar Serviço</div>
    <form action="index.php?menuop=config-update-contact" method="post">

    <div class="user-details">

        <div class="input-box">
        <label for="idContato">ID</label>
        <input type="text" readonly name="idContato" value="<?=$dados["idContato"]?>">
        </div>

        <div class="input-box">
        <label for="nomeContato">Nome</label>
        <input type="text" name="nomeContato" placeholder="Nome do Cliente" value="<?=$dados["nomeContato"]?>" required>
        </div>

    <div class="input-box">
        <label for="telefoneContato">Telefone</label>
        <input type="text" name="telefoneContato" value="<?=$dados["telefoneContato"]?>">
    </div
    >
    <div class="input-box">
        <label for="servicoContato">Serviço</label> <!--AQUI VAI UM SELECT PRA SELECIONAR SERVIÇO-->
        <select name="servicoContato" id="">
            <option value="" name="servico" class="select">Serviço</option>
            <?php

            $servico = "SELECT * FROM servico";
            $restult_service = mysqli_query($conexao, $servico);
            while($row_servico = mysqli_fetch_assoc($restult_service)) { ?>
            <option value="<?php echo $row_servico['servicos']; ?>"><?php echo $row_servico['servicos']; ?>
            </option><?php  

            }

            ?>
        </select>
    </div>

    <div class="input-box">
        <label for="barbeiro">Barbeiro</label>
        <select name="barbeiro" id="">
            
            <option value="">Barbeiro</option>
            <option value="">Barbeiro</option>
        </select>               <!--AQUI VAI UM SELECT PRA SELECIONAR BARBEIRO-->
    </div>

    <div class="input-box">
        <label for="dataServio">Data</label>
        <input type="date" name="dataServico" value="<?=$dados["dataServico"]?>">
    </div>

    <div class="input-box">
        <label for="horaServico">Hora</label>
        <input type="time" name="horaServico" value="<?=$dados["horaServico"]?>">
    </div>

    <div class="input-box">
        <label for="tempoServico">Tempo</label>
        <input type="number" name="tempoServico" value="<?=$dados["tempoServico"]?>"> 
    </div>
    </div>
    
    <div class="button">
        <input type="submit" value="ATUALIZAR" btn="btnAtt">
    </div>

    </form>

    <a href="index.php?menuop=contatos" class="modal_close">
    <small style=color:red;font-weight:bold;>voltar</small>
    </a>

</div>