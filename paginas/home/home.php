<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dash.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <title>Dashboard</title>
</head>
<body>
<main>

<a href="
https://wa.me/5551995860633?text=Ol%C3%A1%2C%20preciso%20de%20um%20suporte%20seu." class="floating" target="_blank">
<div class="right-button">

<span class="widgetlabel">
    Fale com o Suporte
    <img src="css/support.png" class="emoji">
</span>
    

</div>
</a>



<style>

.floating {
    position: fixed;
    bottom: 8%;
    right: 18px;
    text-align:center;
    color: #00778b;
}

.floating .right-button{

    width: 60px;
    height: 60px;
    background: url(css/whatsapp.png);
    border-radius: 50%;
    background-repeat: no-repeat;
    background-color: #34af23;
    background-size: 24px;
    background-position: center;
    float:right;
    margin:0 auto;
    cursor: pointer;
    box-shadow: 0 -2px 3px -1px #34af23;
}

.floating .widgetlabel {
    position: relative;
    right: 19.5rem;
    top: 10px;
    white-space: nowrap;
    border: 0px;
    font-size: 18px;
    border-radius: 16px;
    padding: 10px 210px 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: rgb(0 18 46/ 24%) 0px 6px 32px 0px;
}

.floating .emoji{
    width:20px;
    margin: 4px 5px 3px;
    user-select: none;

}


</style>

<section class="middle">
<div class="headers">
    <h1>Bem vindo</h1>
    <div class="date">
            <?php
            $hoje = date('d/m/Y'); echo $hoje;
            ?>
    </div>
    
<h2>Olá</h1>
</div>
<!--END HEADERS-->

<div class="cards">
    <div class="card">
        <div class="top">
            <div class="left">
                <img src="css/tesoura-e-pente.png" alt="">
                <h2>TOTAL DE AGENDAS</h2>
            </div>
        </div>
        <div class="middle">
        <h1><?php

$query = "SELECT idContato FROM tb_contatos order by idContato";
$query_run = mysqli_query($conexao, $query);

$row = mysqli_num_rows($query_run);

echo '<h1> '.$row.'</h1>';

?></h1>
        <div class="imgs">
        <a href="#demo-modal"><img src="css/total2.png"alt=""></a>
        </div>
        </div>
        
        <div class="bottom">
            <div class="left">
                <small>CABELO</small>
                <h5><?php

$queryy = "SELECT idContato FROM tb_contatos WHERE servicoContato ='Cabelo e Barba' order by idContato";
$query_runn = mysqli_query($conexao, $queryy);

$row = mysqli_num_rows($query_runn);

echo '<h5> '.$row.'</h5>';

?></h5>
            </div>
            <div class="right">
                <div class="expiry">
                <small>Barba</small>
                <h5>08/23</h5>
                </div>
                <div class="cvv">
                    <small>Cabelo</small>
                    <h5>123</h5>
                </div>
            </div>

            
        </div>
    </div>
    <!--END CARD-->
<!--END CARDS-->


    <div class="card">
        <div class="top">
            <div class="left">
                <img src="css/tesoura-e-pente.png" alt="">
                <h2>SERVIÇOS DE HOJE</h2>
            </div>
        </div>
        <div class="middle">
        <h1><?php

$queryy = "SELECT idContato FROM tb_contatos WHERE dataServico = CURDATE()";
$query_runn = mysqli_query($conexao, $queryy);

$row = mysqli_num_rows($query_runn);

echo '<h2> '.$row.'</h2>';

?></h1>
        <div class="imgs">
        <a href="#demo-modal-today"><img src="css/day.png" alt=""></a>
        </div>
        </div>
        
        <div class="bottom">
            <div class="left">
                <small>STUDIO </small>
                <h5>97</h5>
            </div>
            <div class="right">
                <div class="expiry">
                <small>DIA</small>
                <h5><?php
         $hoje = date('d/m/Y'); echo $hoje;
        ?></h5>
                </div>
            </div>

            
        </div>
    </div>
    <!--END CARD-->
<!--END CARDS-->

    <div class="card">
        <div class="top">
            <div class="left">
                <img src="css/tesoura-e-pente.png" alt="">
                <h2>GUILHERME</h2>
            </div>
        </div>
        <div class="middle">
        <h1><?php

$queryy = "SELECT idContato FROM tb_contatos WHERE barbeiro='Guilherme' order by idContato";
$query_runn = mysqli_query($conexao, $queryy);

$row = mysqli_num_rows($query_runn);

echo '<h1> '.$row.'</h1>';

?></h1>
        <div class="imgs">
<a href="#modal-gui"><img src="css/navalha.png" alt=""></a>
        </div>
        </div>
        
        <div class="bottom">
            <div class="left">
                <small>STUDIO </small>
                <h5>97</h5>
            </div>
            <div class="right">
                <div class="expiry">
                <small>DO DIA</small>
                <h5><?php
         $hoje = date('d/m/Y'); echo $hoje;
        ?></h5>
                </div>
                <div class="cvv">
                    <small>Total</small>
                    <h5>123</h5>
                </div>
            </div>

            
        </div>
    </div>
    <!--END CARD-->
<!--END CARDS-->

    <div class="card">
        <div class="top">
            <div class="left">
                <img src="css/tesoura-e-pente.png" alt="">
                <h2>JONATAN</h2>
            </div>
        </div>
        <div class="middle">
        <h1><?php

$queryy = "SELECT idContato FROM tb_contatos WHERE barbeiro='Jonatan' order by idContato";
$query_runn = mysqli_query($conexao, $queryy);

$row = mysqli_num_rows($query_runn);

echo '<h1> '.$row.'</h1>';

?></h1>
        <div class="imgs">
            <a href="#modal-jon">
        <img src="css/tesouras.png" alt=""></a>
        </div>
        </div>
        
        <div class="bottom">
            <div class="left">
                <small>STUDIO </small>
                <h5>97</h5>
            </div>
            <div class="right">
                <div class="expiry">
                <small>Serviços do Dia</small>
                <h5><?php
         $hoje = date('d/m/Y'); echo $hoje;
        ?></h5>
                </div>
                <div class="cvv">
                    <small>TOTAL</small>
                    <h5><?php
                    
                    $queryy = "SELECT idContato FROM tb_contatos WHERE dataServico = CURDATE()";
$query_runn = mysqli_query($conexao, $queryy);

$row = mysqli_num_rows($query_runn);

echo '<h4> '.$row.'</h4>';
                    ?></h5>
                </div>
            </div>

            
        </div>
    </div>
    <!--END CARD-->
<!--END CARDS-->

    <div class="card">
        <div class="top">
            <div class="left">
                <img src="css/tesoura-e-pente.png" alt="">
                <h2>AJUDANTE</h2>
            </div>
        </div>
        <div class="middle">
        <h1><?php

$queryy = "SELECT idContato FROM tb_contatos WHERE barbeiro='Ajudante' order by idContato";
$query_runn = mysqli_query($conexao, $queryy);

$row = mysqli_num_rows($query_runn);

echo '<h1> '.$row.'</h1>';

?></h1>
        <div class="imgs">
        <img src="css/maquininha.png" alt="">
        </div>
        </div>
        
        <div class="bottom">
            <div class="left">
                <small>STUDIO </small>
                <h5>97</h5>
            </div>
            <div class="right">
                <div class="expiry">
                <small>DO DIA</small>
                <h5><?php
         $hoje = date('d/m/Y'); echo $hoje;
        ?></h5>
                </div>
                <div class="cvv">
                    <small>Total</small>
                    <h5>123</h5>
                </div>
            </div>

            
        </div>
    </div>
    <!--END CARD-->
</div>
<!--END CARDS-->

<div class="modal" id="demo-modal">


    <div class="modal-content">
    <div class="tittle">Total de Agendas</div>
    <a href="" class="modal_close">
    <img src="css/add.svg" alt="" srcset="css/closex.svg">
    </a>

    <table class="table">

    <thead >
        <tr>
        <th scope="col">NOME</th>
        <th scope="col">SERVIÇO</th>
        <th scope="col">BARBEIRO</th>
        <th scope="col">DATA</th>
        <th scope="col">HORA</th>
        </tr>
    </thead>

    <?php

    $querymodal = "SELECT upper (nomeContato) AS nomeContato,
    upper (servicoContato) AS servicoContato,
    upper (barbeiro) as barbeiro,
    telefoneContato,
    horaServico,
    tempoServico,
    DATE_FORMAT(dataServico, '%d/%m/%Y') AS dataServico
    FROM tb_contatos
    ORDER BY month(dataServico), day(dataServico), time(horaServico) ASC
    ";

    $rsmodal = mysqli_query($conexao, $querymodal) or die("Erro ao Executar a Consulta!" . mysqli_error($conexao));
    while($dados = mysqli_fetch_assoc($rsmodal))
    {
    ?>

    <tbody>
        <tr>
        <td data-tittle="NOME"><?=$dados["nomeContato"] ?></td>
        <td data-tittle="SERVIÇO"><?=$dados["servicoContato"] ?></td>
        <td data-tittle="BARBEIRO"><?=$dados["barbeiro"] ?></td>
        <td data-tittle="DATA"><?=$dados["dataServico"] ?></td>
        <td data-tittle="HORA"><?=$dados["horaServico"] ?></td>
        </tr>
    </tbody>


<?php
    }
?>
    
    </table>

    

    </div>
    
    
</div>
    

</div>
</div>

<div class="modal" id="demo-modal-today">


    <div class="modal-content">
    <div class="tittle">Total de Agendas</div>
    <a href="" class="modal_close">
    <img src="css/add.svg" alt="" srcset="css/closex.svg">
    </a>

    <table class="table">

    <thead >
        <tr>
        <th scope="col">NOME</th>
        <th scope="col">SERVIÇO</th>
        <th scope="col">BARBEIRO</th>
        <th scope="col">DATA</th>
        <th scope="col">HORA</th>
        </tr>
    </thead>

    <?php

    $querymodal = "SELECT upper (nomeContato) AS nomeContato,
    upper (servicoContato) AS servicoContato,
    upper (barbeiro) as barbeiro,
    telefoneContato,
    horaServico,
    tempoServico,
    DATE_FORMAT(dataServico, '%d/%m/%Y') AS dataServico
    FROM tb_contatos
    WHERE dataServico = CURDATE()
    ORDER BY month(dataServico), day(dataServico), time(horaServico) ASC
    ";

    $rsmodal = mysqli_query($conexao, $querymodal) or die("Erro ao Executar a Consulta!" . mysqli_error($conexao));
    while($dados = mysqli_fetch_assoc($rsmodal))
    {
    ?>

    <tbody>
        <tr>
        <td data-tittle="NOME"><?=$dados["nomeContato"] ?></td>
        <td data-tittle="SERVIÇO"><?=$dados["servicoContato"] ?></td>
        <td data-tittle="BARBEIRO"><?=$dados["barbeiro"] ?></td>
        <td data-tittle="DATA"><?=$dados["dataServico"] ?></td>
        <td data-tittle="HORA"><?=$dados["horaServico"] ?></td>
        </tr>
    </tbody>


<?php
    }
?>
    
    </table>

    

    </div>
    
    
</div>
    

</div>
</div>

<div class="modal" id="modal-gui">


    <div class="modal-content">
    <div class="tittle">Total de Agendas</div>
    <a href="" class="modal_close">
    <img src="css/add.svg" alt="" srcset="css/closex.svg">
    </a>

    <table class="table">

    <thead >
        <tr>
        <th scope="col">NOME</th>
        <th scope="col">SERVIÇO</th>
        <th scope="col">DATA</th>
        <th scope="col">HORA</th>
        </tr>
    </thead>

    <?php

    $querymodal = "SELECT upper (nomeContato) AS nomeContato,
    upper (servicoContato) AS servicoContato,
    upper (barbeiro) as barbeiro,
    telefoneContato,
    horaServico,
    tempoServico,
    DATE_FORMAT(dataServico, '%d/%m/%Y') AS dataServico
    FROM tb_contatos
    WHERE barbeiro = 'Guilherme'
    ORDER BY month(dataServico), day(dataServico), time(horaServico) ASC
    ";

    $rsmodal = mysqli_query($conexao, $querymodal) or die("Erro ao Executar a Consulta!" . mysqli_error($conexao));
    while($dados = mysqli_fetch_assoc($rsmodal))
    {
    ?>

    <tbody>
        <tr>
        <td data-tittle="NOME"><?=$dados["nomeContato"] ?></td>
        <td data-tittle="SERVIÇO"><?=$dados["servicoContato"] ?></td>
        <td data-tittle="DATA"><?=$dados["dataServico"] ?></td>
        <td data-tittle="HORA"><?=$dados["horaServico"] ?></td>
        </tr>
    </tbody>


<?php
    }
?>
    
    </table>

    

    </div>
    
    
</div>
    

</div>
</div>

<div class="modal" id="modal-jon">


    <div class="modal-content">
    <div class="tittle">Total de Agendas</div>
    <a href="" class="modal_close">
    <img src="css/add.svg" alt="" srcset="css/closex.svg">
    </a>

    <table class="table">

    <thead >
        <tr>
        <th scope="col">NOME</th>
        <th scope="col">SERVIÇO</th>
        <th scope="col">DATA</th>
        <th scope="col">HORA</th>
        </tr>
    </thead>

    <?php

    $querymodal = "SELECT upper (nomeContato) AS nomeContato,
    upper (servicoContato) AS servicoContato,
    upper (barbeiro) as barbeiro,
    telefoneContato,
    horaServico,
    tempoServico,
    DATE_FORMAT(dataServico, '%d/%m/%Y') AS dataServico
    FROM tb_contatos
    WHERE barbeiro = 'Jonatan'
    ORDER BY month(dataServico), day(dataServico), time(horaServico) ASC
    ";

    $rsmodal = mysqli_query($conexao, $querymodal) or die("Erro ao Executar a Consulta!" . mysqli_error($conexao));
    while($dados = mysqli_fetch_assoc($rsmodal))
    {
    ?>

    <tbody>
        <tr>
        <td data-tittle="NOME"><?=$dados["nomeContato"] ?></td>
        <td data-tittle="SERVIÇO"><?=$dados["servicoContato"] ?></td>
        <td data-tittle="DATA"><?=$dados["dataServico"] ?></td>
        <td data-tittle="HORA"><?=$dados["horaServico"] ?></td>
        </tr>
    </tbody>


<?php
    }
?>
    
    </table>

    

    </div>
    
    
</div>
    

</div>
</div>

</section>
</main>
</body>
</html>

