<?php
    include  '../src/validaFormulario.php';
    include  '../src/mensagem.php';
    include  '../models/conexao.php';
    include  '../models/sql.php';

    class autorizacao{
        public function autoriza($motivo, $senha){
            $user = array();
            $form= new form();
            $user[0]=$form->Nome($motivo);
            $user[1]=$form->SenhaLogin($senha);
   
            $retorno= $form->erro($user);            
          
            if($retorno ==1){
                $senha=md5($senha);
                $exp=explode('-', $_SESSION['ID_USUARIO']);
                
                $linha= selectRows('*', 'aluno WHERE id_aluno="'.$exp[0].'" AND senha="'.$senha.'"');

                if($linha == 1){
                     insert('autorizacao', 'motivo, fk_aluno', '"'.$motivo.'", "'.$exp[0].'"');
                }else{
                    $_SESSION['MSG']= estiloMsg('Senha incompatível!');
                }
               }
            }
    }
    