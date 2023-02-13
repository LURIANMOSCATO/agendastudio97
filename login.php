<?php

include "database/conection.php";

session_start();

if(isset($_POST['login'])) {

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT usuario from login WHERE usuario = '$usuario' and senha = '$senha'";

    $result = mysqli_query($conexao, $sql);

    if($result) 
    {
        if(mysqli_num_rows($result) == 1) 
        {
            $fetch = mysqli_fetch_assoc($result);
            
            if($fetch['senha'] == $_POST['password']) // se senha encontrada no banco
            {
                $_SESSION['usuario'] = true;
                $_SESSION['usuario'] = $fetch['usuario'];

                header("refresh:0; url=index.php");

            }

            else 
            {
                echo "<script> alert('Senha inválida!'); </script>";
            }
        } // se  usuário for encontrado

    } //se usuario não encontrado
    
    else 
    {
            echo "<script> alert('Usuário não encontrado!'); </script>";
    }
    }

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="css/simbol.png" href="css/barbearia.png">
    <link rel="stylesheet" href="css/login.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <title>LOGIN</title>
</head>
<body>
    <div class="center">
        <input type="checkbox" name="" id="show">
        <label for="show" class="show-btn"><i class='bx bx-lock'></i></label>
        <div class="container">
            <label for="show" class="close-btn"><i><img src="css/close-outline.svg" alt="btncl"></i></label>
        <div class="text">LOGIN</div>

        <form action="login.php" method="POST">
        <div class="data">
        
        <label for="">Usuario</label>
        <input name="usuario" type="text" class="input-user" placeholder="Seu Usuario" required>
        </div>

        <div class="data">
        <label>Senha</label>
        <input name="senha" type="password" class="input-user" placeholder="Sua Senha" required>
        </div>

        <div class="btn">
            <div class="inner">
            <button type="submit" name="login" class="btn-login">ENTRAR</button>
            </div>
        </div> 
        </form>
        </div>
        </div>
</body>
</html>