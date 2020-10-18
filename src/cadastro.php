<?php
    include  '../src/validaFormulario.php';
    include  '../src/mensagem.php';
    include  '../models/conexao.php';
    include  '../models/sql.php';
    
    class cadastro{
        public function cadastroAluno($nome, $cpf, $email, $senha, $repitaSenha, $table){
            $form= new form();
            $user = array();
            $user[0] = $form->Nome($nome);
            $user[1] = $form->Cpf($cpf);
            $user[2] = $form->Email($email);
            $user[3] = $form->Senha($senha, $repitaSenha);
   
            $retorno =$form->erro($user);
            
            if($retorno == 1) {
                  $senha=md5($senha);
                  insert($table, 'nome, email, senha, cpf', "'".$nome."','".$email."','".$senha."','".$cpf."'"); 
            }     
            
    }

        public function cadastroPais($nome, $cpf, $email, $senha, $repitaSenha, $table, $cpfAluno){
            $form= new form();
            $user = array();
            $user[0] = $form->Nome($nome);
            $user[1] = $form->Cpf($cpf);
            $user[2] = $form->Email($email);
            $user[3] = $form->Senha($senha, $repitaSenha);
            $user[4] = $form->Cpf($cpfAluno);

            $retorno =$form->erro($user);
           
            if($retorno == 1) {
                $retorno= selectRows('*', 'aluno WHERE cpf="'.$cpfAluno.'"');
    
                if($retorno == 1){

                    $retorno = select('id_aluno', "aluno WHERE cpf= '".$cpfAluno."'");
                    while($asc = mysqli_fetch_array($retorno)){
                        $id_aluno=$asc['id_aluno'];
                    }
            
                    $senha=md5($senha);
                    insert($table, 'nome, email, senha, cpf, fk_aluno', "'".$nome."','".$email."','".$senha."','".$cpf."','".$id_aluno."'"); 
                }else{
                    $_SESSION['MSG']= estiloMsg("CPF aluno não encontrado!");
                } 
            }
            
}
}