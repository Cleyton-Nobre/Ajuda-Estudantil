<?php
    //Conectar no banco de dados
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $nomeBD="caed";

    $conexao=mysqli_connect($servidor,$usuario,$senha,$nomeBD);

    if(!$conexao){
        echo 'Erro de conexão!';
    }
?>
