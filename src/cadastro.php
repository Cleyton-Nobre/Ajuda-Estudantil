<?php
    include  '../src/validaFormulario.php';
    include  '../src/mensagem.php';
    include  '../models/conexao.php';
    include  '../models/sql.php';
    
    class cadastro{
        public function cadastroUsuario($nome, $email, $senha, $repitaSenha){
            $form= new form();
            $user = array();
            $user[0] = $form->Nome($nome);
            $user[1] = $form->Email($email);
            $user[2] = $form->Senha($senha, $repitaSenha);
   
            $retorno =$form->erro($user);
            
            if($retorno == 1) {
                  $senha=md5($senha);
                  insert("usuario", 'nome, email, senha', "'".$nome."','".$email."','".$senha."'"); 
            }     
            
    }
}