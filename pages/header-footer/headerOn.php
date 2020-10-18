<?php
   session_start();
   if(!isset($_SESSION['ID_USUARIO'])){
       header("Location:loginAluno.php");
   }
 
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/caed/style/style.css">

        <script src="https://kit.fontawesome.com/4107044750.js" crossorigin="anonymous"></script>
        <title>Home</title>
    </head>
    <body >
        <nav class="navbar bg-brown">
            <div class="container-fluid p-2">
                <ul class="nav mx-auto size">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="http://localhost/caed/pages/home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href='http://localhost/caed/pages/autorizacao.php'>Autorização</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="http://localhost/caed/pages/perfil.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="http://localhost/caed/pages/sair.php">Sair</a>
                    </li>
                   
                </ul>
            </div>
        </nav>