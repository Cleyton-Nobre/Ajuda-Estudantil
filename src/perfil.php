<?php
    include  '../src/validaFormulario.php';
    include  '../src/mensagem.php';
    include  '../models/conexao.php';
    include  '../models/sql.php';
    
    class perfil{
        public function perfilUsuario($nome, $senhaAtual, $novaSenha){
            $form= new form();
            $user = array();
            $user[0] = $form->Nome($nome);
            $user[1] = $form->SenhaLogin($senhaAtual);
            $user[2] = $form->SenhaLogin($novaSenha);

            $senhaAtual=md5($senhaAtual);            
            $retorno=selectRows('*', 'usuario WHERE id="'.$_SESSION['ID_USUARIO'].'" AND senha="'.$senhaAtual.'"');

            if($retorno!=1){
                $user[3]=estiloMsg('Senha inválida!');
                $retorno = $form->erro($user);

            }else{
                $retorno =$form->erro($user);
            
                if($retorno == 1) {
                      $senha=md5($novaSenha);
                      update("usuario", 'nome="'.$nome.'", senha="'.$senha.'"', "id='".$_SESSION['ID_USUARIO']."'"); 
                }  
            }      
    }
} 