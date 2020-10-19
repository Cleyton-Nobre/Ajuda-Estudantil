<?php
   session_start();
   if(!isset($_SESSION['ID_USUARIO'])){
       header("Location:login.php");
   }
 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/Ajuda-Estudantil/style/style.css">
    <link rel="stylesheet" href="http://localhost/Ajuda-Estudantila/style/menu.css">
    <script src="https://kit.fontawesome.com/4107044750.js" ></script>

</head>
<body  style="background-image: url('http://localhost/ajuda-estuda/img/bg.jpg')">
    <nav class="navbar p-4 <?=$style?>">
        <div class="ml-5">
            <i class="fab fa-strava fa-2x ml-5 mr-5 text-white">Ajuda Estudantil</i>
        </div>
        <button class="navbar-toggler ml-auto" type="button">
            <span class="navbar-toggler-icon" onclick="openNav()" ><i class="fas fa-bars fa-2x text-white"></i></span>
          </button>
  
        <div id="mySidenav" class="sidenav opacity">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-chevron-left text-white"></i></a>
          <div>
                  <a href="http://localhost/Ajuda-Estudantil/pages/home.php">Home</a>
                  <a href="http://localhost/Ajuda-Estudantil/pages/perfil.php">Perfil</a>
                  <a href="http://localhost/Ajuda-Estudantil/pages/sair.php">Sair</a>
          </div>
        </div>
    </nav>