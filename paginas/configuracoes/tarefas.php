<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/config.css">
    <title>Configurações</title>
</head>
<body>

<div id="container-floating">
  <div class="nd4 nds"><img class="reminder">
  <a href="#modal-add-barber">
    <p class="letter"><img src="css/barba.png" alt=""></p>
    </a>
  </div>
  
 
  <div class="nd1 nds">
  <a href="#modal-add">
    <p class="letter"><img src="css/tesoura-e-pente.png" alt=""></p>
    </a>
  </div>

  <div id="floating-button">
    <p class="plus">+</p>
    <img class="edit" src="css/cancel.png">
  </div>
</div>


<section class="middle">

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">SERVIÇOS</th>
            <th scope="col">EXCLUIR</th>
        </tr>
    </thead>

    <?php

            $sqlconfig = "SELECT 
            id, servicos FROM servico
            ";

        $rsconfig = mysqli_query($conexao, $sqlconfig) or die("Erro ao Executar a Consulta!" . mysqli_error($conexao));
        while($dados = mysqli_fetch_assoc($rsconfig))  {
    ?>
    <tbody>
        <tr>
        <td data-tittle="ID" scope="row"><?=$dados["id"] ?></td>
        <td data-tittle="ID" scope="row"><?=$dados["servicos"] ?></td>
        <td data-tittle="ID" scope="row"><a href="index.php?menuop=delete-services&servicos=<?=$dados["servicos"] ?>">


        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg></a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>


</table>

    </section>

    <div id="modal-add" class="modal">

    <div class="modal-content">
        
    <form action="index.php?menuop=insert-servico" method="post">

<div class="user-details">

<div class="input-box">
    <label for="servicos">Serviço</label>
    <input type="text" name="servico" placeholder="Digite o Serviço" required>
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
    </div>

    <div id="modal-add-barber" class="modal">

    <div class="modal-content">
        
    <form action="index.php?menuop=insert-barber" method="post">

<div class="user-details">

<div class="input-box">
    <label for="barbeiro">Barbeiro</label>
    <input type="text" name="barbeiro" placeholder="Digite o Barbeiro" required>
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
    </div>

    <table class="table2">
    <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">BARBEIROS</th>
            <th scope="col">EXCLUIR</th>
        </tr>
    </thead>

    <?php

            $sqlconfig = "SELECT 
            id, barbeiro FROM barbeiro
            ";

        $rsconfig = mysqli_query($conexao, $sqlconfig) or die("Erro ao Executar a Consulta!" . mysqli_error($conexao));
        while($dados = mysqli_fetch_assoc($rsconfig))  {
    ?>
    <tbody>
        <tr>
        <td data-tittle="ID" scope="row"><?=$dados["id"] ?></td>
        <td data-tittle="ID" scope="row"><?=$dados["barbeiro"] ?></td>
        <td data-tittle="ID" scope="row"><a href="index.php?menuop=delete-barber&barbeiro=<?=$dados["barbeiro"] ?>">


        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M6 7H5v13a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7H6zm4 12H8v-9h2v9zm6 0h-2v-9h2v9zm.618-15L15 2H9L7.382 4H3v2h18V4z"></path></svg></a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>


</table>

    </main>
</body>
</html>