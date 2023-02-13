<?php
session_start();
include("database/conection.php");

if(!isset($_SESSION['usuario'])) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="barba, cabelo, agenda, servicos">
    <link rel="icon" type="css/barbeiro.png" href="css/barbearia.png">
    <title>Agenda Local</title>
<!-- CSS -->
<link rel="stylesheet" href="css/style.css"/>
<!-- BOX ICONS USAE -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


</head>
<body>
    <header class="header" id="header">
        <nav class="nav container">

        <a href="#" class="nav_logo"><img src="css/barbeiro.png" target="_blank" alt="simbol" srcset=""></a>

        <div class="nav_menu" id="nav-menu">
            <ul class="nav_list">

                <li class="nav-item">
                <a href="index.php?menuop=home"  class="nav_link">
                <i class='bx bxs-home nav_icon'></i>
                    <span class="nav_name">Home</span>
                </a>
                </li>

                <li class="nav-item">
                <a href="index.php?menuop=contatos" class="nav_link">
                <i class='bx bxs-calendar nav_icon'></i>
                    <span class="nav_name">Contatos</span>
                </a>
                </li>

                <li class="nav-item">
                <a href="index.php?menuop=tarefas" class="nav_link">
                <i class='bx bxs-cog nav_icon'></i>
                    <span class="nav_name">Configurações</span>
                </a>
                </li>

                <li class="nav-item">
                <a href="index.php?menuop=assinaturas" class="nav_link">
                <i class='bx bxs-pencil nav_icon'></i>
                    <span class="nav_name">Assinaturas</span>
                </a>
                </li>

                <li class="nav-item">
                <a href="logout.php" class="nav_link">
                <svg class='nav_icon' xmlns="http://www.w3.org/2000/svg" width="48" height="25" viewBox="0 0 24 24" style="fill: rgba(236, 17, 17, 1);transform: ;msFilter:;"><path d="M12 21c4.411 0 8-3.589 8-8 0-3.35-2.072-6.221-5-7.411v2.223A6 6 0 0 1 18 13c0 3.309-2.691 6-6 6s-6-2.691-6-6a5.999 5.999 0 0 1 3-5.188V5.589C6.072 6.779 4 9.65 4 13c0 4.411 3.589 8 8 8z"></path><path d="M11 2h2v10h-2z"></path></svg>
                <span class="nav_name">Sair</span>
                </a>
                </li>
                
            </ul>
        </div>
            
        </nav>
    </header>
    <main>

    <section class="container section section_height" id="home">
    <?php
            $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";
            switch ($menuop) {
                case 'home':
                    include("paginas/home/home.php");
                    break;

                case 'contatos':
                    include("paginas/contatos/contatos.php");
                    break;

                case 'insert-contact':
                    include("paginas/contatos/insert-contact.php");
                    break;

                case 'update-contact':
                    include("paginas/contatos/update-contact.php");
                    break;

                case 'config-update-contact':
                    include("paginas/contatos/config-update-contact.php");
                    break;

                case 'delete-contact':
                    include("paginas/contatos/delete-contact.php");
                    break;

                    case 'tarefas':
                        include("paginas/configuracoes/tarefas.php");
                        break;

                    case 'insert-servico':
                        include("paginas/configuracoes/insert-servico.php");
                        break;

                    case 'insert-barber':
                        include("paginas/configuracoes/insert-barber.php");
                        break;

                    case 'delete-services':
                        include("paginas/configuracoes/delete-services.php");
                        break;

                    case 'delete-barber':
                        include("paginas/configuracoes/delete-barber.php");
                        break;

                    case 'assinaturas':
                        include("paginas/assinaturas/assinaturas.php");
                        break;

                default:
                    include("paginas/home/home.php");
                    break;
            }
        
        ?>
    </section>
    

    </main>
    <script src="js/main.js"></script>
</body>
</html>