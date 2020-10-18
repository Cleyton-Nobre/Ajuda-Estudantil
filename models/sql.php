<?php
    function insert($nomeTable, $atributos, $valores){
        global $conexao;
        $sql="INSERT INTO $nomeTable($atributos) values ($valores)";
        if(mysqli_query($conexao, $sql)){
            
            $_SESSION['MSG']= SUCESSO;
            }else{
                $_SESSION['MSG']= ERRO;
                }
            }
                       
    function update($table, $valores, $onde){
        global $conexao;
        $sql= "UPDATE $table SET $valores WHERE $onde";
        if(mysqli_query($conexao, $sql)){
            $_SESSION['MSG']= SUCESSO;
              }else{
                $_SESSION['MSG']= ERRO;
                }
        }

    function selectRows($atributos, $table){
        global $conexao;
        $sql= "SELECT $atributos FROM $table";
        $result=mysqli_query($conexao, $sql);
        if(mysqli_fetch_row ($result)>=1){
                return 1;
            }else{
                return 0;
            }
        }

    function select($atributos, $clausula){
        global $conexao;
        $sql= "SELECT $atributos FROM $clausula";
        $result=mysqli_query($conexao, $sql);
        if(mysqli_query($conexao, $sql)){
            return $result;
            }else{
                $_SESSION['MSG']= ERRO;
                return 0;
                }     
        }