<?php
    include  '../src/validaFormulario.php';
    include  '../src/mensagem.php';
    include  '../models/conexao.php';
    include  '../models/sql.php';

    class login{
        public function loginU($email, $senha, $table){
            $user = array();
            $form= new form();
            $user[0]=$form->Email($email);
            $user[1]=$form->SenhaLogin($senha);
   
            $senha=md5($senha);
            $linha= selectRows('*', $table.' WHERE email="'.$email.'" AND senha="'.$senha.'"');

           $retorno= $form->erro($user);
            if($retorno ==1){
                if($linha=1){
                    $new=select('*', $table.' WHERE email="'.$email.'" AND senha="'.$senha.'"');
                   
                    while($aux=mysqli_fetch_array($new)){
                        $id="id_".$table;
                        $_SESSION['ID_USUARIO']=$aux["$id"]."-$table";
                    }

                   header('Location:home.php');//logado
    
                   }else{
                    $_SESSION['MSG']  = estiloMsg('E-mail ou Senha incorreto!');
                      
                    }
                }
               }
            }
           
   
   
    