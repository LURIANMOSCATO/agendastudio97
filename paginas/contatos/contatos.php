<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Listagem</title>
</head>



<!--index.php?menuop=new-contact-->
<body>

<?php
    //Recebe os dados do formulário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    ?>

<div id="floating-button">
<a href="#demo-modal"><p class="plus">+</p></a>
    <img class="edit" src="">
  </div>
</div>


<div class="wraper">
    <form class="search" action="index.php?menuop=contatos" method="post">

    <div class="icon"></div>
    <div class="input">
        <input type="text" placeholder="Procurar" name="txt_pesquisa" id="mysearch">
    </div>
    <span class="clear" onclick="document.getElementById('mysearch').value = ''"></span>
    
</form>

<!--PESQUISA ENTRE DATAS-->

</div>

<!--PESQUISA ENTRE DATAS-->

</div>

</div>


<script>
    const icon = document.querySelector('.icon');
    const search = document.querySelector('.search');
    icon.onclick = function(){
        search.classList.toggle('active')
    }

    $(document).ready(function(){
        $(function(){
            var dtToday = new Date();
            
            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if(month < 10)
            month = '0' + month.toString();
            if(day < 10)
            day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;

            $('#dateControl').attr('min', maxDate);
        });
    })

</script>
    

<link rel="stylesheet" href="css/list.css"/>



<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">SERVIÇO</th>
            <th scope="col">BARBEIRO</th>
            <th scope="col">DATA</th>
            <th scope="col">HORA</th>
            <th scope="col">TEMPO</th>
            <th scope="col">EDITAR</th>
            <th scope="col">CONCLUIR</th>
        </tr>
    </thead>
    <?php

    if(isset($_POST['submit_date'])){

        $date1 = date("d-m-Y", strtotime($_POST["date1"]));
        $date2 = date("d-m-Y", strtotime($_POST["date2"]));
    }
        $quantidade = 10;

        $pagina = (isset($GET['pagina'])?(int)$_GET['pagina']:1);

        $inicio = ($quantidade * $pagina) - $quantidade;

        $txt_pesquisa = (isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";



        $sql = "SELECT 
        idContato, 
        upper (nomeContato) AS nomeContato,
        upper (servicoContato) as servicoContato,
        upper (barbeiro) as barbeiro,
        telefoneContato,
        horaServico,
        tempoServico, 
        DATE_FORMAT(dataServico, '%d/%m/%Y') AS dataServico
        FROM tb_contatos
        WHERE 
        idContato='{$txt_pesquisa}' or nomeContato LIKE '%{$txt_pesquisa}%'
        ORDER BY  month(dataServico), day(dataServico), time(horaServico) ASC
        LIMIT $inicio , $quantidade 
        ";
        /*RESULT SET*/
        $rs = mysqli_query($conexao, $sql) or die("Erro ao Executar a Consulta!" . mysqli_error($conexao));
        while($dados = mysqli_fetch_assoc($rs)) 
        {
    ?>
    <tbody>
        <tr>
            <td data-tittle="ID" scope="row"><?=$dados["idContato"] ?></td>
            <td data-tittle="NOME"><?=$dados["nomeContato"] ?></td>
            <td data-tittle="TELEFONE"><?=$dados["telefoneContato"] ?></td>
            <td data-tittle="SERVIÇO"><?=$dados["servicoContato"] ?></td>
            <td data-tittle="BARBEIRO"><?=$dados["barbeiro"] ?></td>
            <td data-tittle="DATA"><?=$dados["dataServico"] ?></td>
            <td data-tittle="HORA"><?=$dados["horaServico"] ?></td>
            <td data-tittle="TEMPO"><?=$dados["tempoServico"] ?></td>
            <td data-tittle="EDITAR"><a href="index.php?menuop=update-contact&idContato=<?=$dados["idContato"] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(15, 64, 77, 0.78);transform: ;msFilter:;"><path d="m16 2.012 3 3L16.713 7.3l-3-3zM4 14v3h3l8.299-8.287-3-3zm0 6h16v2H4z"></path></svg></a></td>
            <td data-tittle="CONCLUIR"><a href="index.php?menuop=delete-contact&idContato=<?=$dados["idContato"] ?>" ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgba(8, 116, 35, 0.83);transform: ;msFilter:;"><path d="M19 3H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm-7.933 13.481-3.774-3.774 1.414-1.414 2.226 2.226 4.299-5.159 1.537 1.28-5.702 6.841z"></path></svg></a></td>
        </tr>
        <?php
    }
?>
    </tbody>
    
</table>

<?php 

$sqlTotal = "SELECT idContato FROM tb_Contatos";
$qrTotal = mysqli_query($conexao, $sqlTotal) or die (mysqli_error($conexao));
$numTotal = mysqli_num_rows($qrTotal);
$totalPagina = ceil($numTotal/$quantidade);

echo "Total de Serviços: $numTotal <br>";
echo '<a href="?menuop=contatos&pagina=1">First Page</a>';

if($pagina>6){
    ?>
<a href="?menuop=contatos&pagina=<?php echo $pagina-1?>"> << </a>
    <?php
}

for($i=1;$i<=$totalPagina;$i++){

    if($i>=($pagina-5) && $i <= ($pagina+5)){
            if($i==$pagina){
                echo $i;
        
            }else{
                echo "<a href=\"?menuop=contatos&pagina=$i\">$i<a/> ";
            }
    }
}

if($pagina<($totalPagina-5)){
    ?>
<a href="?menuop=contatos&pagina=<?php echo $pagina+1?>"> << </a>
    <?php
}

echo "<a href=\"?menuop=contatos&pagina=$totalPagina\">Última Página</a>";


?>


<!--COMEÇA O CADASTRO EM MODAL-->
<div id="demo-modal" class="modal">

<div class="modal-content">
<div class="tittle">Cadastro de Serviço</div>
    <form action="index.php?menuop=insert-contact" method="post">

    <div class="user-details">

        <div class="input-box">
        <label for="nomeContato">Nome</label>
        <input type="text" name="nomeContato" placeholder="Nome do Cliente" required>
        </div>
        

    <div class="input-box">
        <label for="telefoneContato">Telefone</label>
        <input type="tel" id="telefone" name="telefoneContato" maxlength="15" autocomplete="off" onkeyup="handlePhone(event)">
</div>


<script>function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
    v=v.replace(/\D/g,""); //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d)(\d{4})$/,"$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
}
function id( el ){
	return document.getElementById( el );
}
window.onload = function(){
	id('telefone').onkeyup = function(){
		mascara( this, mtel );
	}
}

</script>

<div class="input-box">
        <label for="servicoContato">Serviço</label> <!--AQUI VAI UM SELECT PRA SELECIONAR SERVIÇO-->

        <select name="servicoContato" class="dropdown-select">
            <option name="servicoContato" class="select" id="servicoContato"></option>
            <?php
            $servico = "SELECT * FROM servico";
            $result_service = mysqli_query($conexao, $servico) or die ("Erro ao configurar conectar com o Banco de Dados!" . mysqli_connect_error());
            while($row_servico = mysqli_fetch_assoc($result_service)) { ?>
            <option value="<?php echo $row_servico['servicos']; ?>"><?php echo $row_servico['servicos']; ?>
            </option><?php  

            }

            ?>
        </select>
    </div>

    <div class="input-box">
        <label for="barbeiro">Selecione o Barbeiro</label>
        <select name="barbeiro" class="dropdown-select" id="barbeiro">
        <option name="servicoContato" class="select" id="servicoContato"></option>
            <?php
            $servico = "SELECT * FROM barbeiro";
            $result_service = mysqli_query($conexao, $servico) or die ("Erro ao configurar conectar com o Banco de Dados!" . mysqli_connect_error());
            while($row_servico = mysqli_fetch_assoc($result_service)) { ?>
            <option value="<?php echo $row_servico['barbeiro']; ?>"><?php echo $row_servico['barbeiro']; ?>
            </option><?php  

            }

            ?>
        </select>               <!--AQUI VAI UM SELECT PRA SELECIONAR BARBEIRO-->
    </div>

    <div class="input-box">
        <label for="dataServico">Data</label>
        <input type="date" name="dataServico" id="dateControl" required>

    <script>

                

    </script>

    </div>

    


    <div class="input-box">
        <label for="horaServico">Hora</label>
        <input type="time" name="horaServico">
    </div>

    <div class="input-box">
        <label for="tempoServico">Tempo</label>
        <select name="tempoServico" id=""  class="dropdown-select">
            <option value="" class="select">10</option>
            <?php
            $servico = "SELECT * FROM tempo";
            $result_service = mysqli_query($conexao, $servico) or die ("Erro ao configurar conectar com o Banco de Dados!" . mysqli_connect_error());
            while($row_servico = mysqli_fetch_assoc($result_service)) { ?>
            <option value="<?php echo $row_servico['tempo']; ?>"><?php echo $row_servico['tempo']; ?>
            </option><?php  

            }

            ?>
        </select>
    </div>
    </div>
    
    <div class="button">
        <input type="submit" value="CADASTRAR" btn="btnAdd">
    </div>

    </form>

    <a href="" class="modal_close">
    <img src="css/add.svg" alt="" srcset="css/closex.svg">
    </a>

</div>

<!--editar cadastros-->


</body>

<script>
    function show(anything){
        document.querySelector( '.textBox').value = anything;
    }

    let dropdown = document.querySelector('.dropdown');
    dropdown.onclick = function(){
        dropdown.classList.toggle('active'); 
    }


</script>

</html>

