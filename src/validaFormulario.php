<?php
 class form{
    function Nome($nome){
           if(empty($nome)){
               return estiloMsg('Nome é um campo obrigatorio!');
           }else{
               if(is_numeric($nome) || (strlen($nome)<3)){
                return estiloMsg('Insira um nome válido!');
               }else{
                   return 1;
               }
           }   
   }

   function Sobrenome($nome){
    if(empty($nome)){
        return estiloMsg('Sobrenome é um campo obrigatorio!');
    }else{
        if(is_numeric($nome) || (strlen($nome)<3)){
         return estiloMsg('Insira um sobrenome válido!');
        }else{
            return 1;
        }
    }   
}

   function Email($Email){
           if(empty($Email)){
            return estiloMsg('E-mail é um campo obrigatorio!'); 
           }else{
               if(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
                return estiloMsg('Insira um E-mail válido!'); 
               }else{
                   return 1;
               }
           }
   }

   function Senha($senha, $senhaRepetida){
          if(empty($senha)){
               return estiloMsg('Senha é um campo obrigatorio!');
          }else{
              if(strlen($senha)<8){
                  return estiloMsg('Sua senha deve ter no mínimo 8 caracteres!');
              }else{
                  if($senha!=$senhaRepetida){
                       return estiloMsg('Suas senhas não são iguais!'); 
                  }else{
                      return 1;
                  }
              }
          }
   }

   function SenhaLogin($senha){
    if(empty($senha)){
        return estiloMsg('Senha é um campo obrigatorio!');
    }else{
        if(strlen($senha)<8){
            return estiloMsg('Sua senha deve ter no mínimo 8 caracteres!'); 
        }else{
                return 1;
            }
        }
    }

         //verificando cpf
    function Cpf($cpf){
        $cpf=str_replace(array('.','-','/'), "", $cpf);
        if(empty($cpf)){
            return estiloMsg("É CPF um campo obrigatorio!");
            }else{
                if(strlen($cpf)!=11){
                return estiloMsg('Informe um CPF valido!');
                    }else{
                        //Verifica se os cpf tem numeros repetidos
                        if ($cpf == '00000000000' || 
                            $cpf == '11111111111' || 
                            $cpf == '22222222222' || 
                            $cpf == '33333333333' || 
                            $cpf == '44444444444' || 
                            $cpf == '55555555555' || 
                            $cpf == '66666666666' || 
                            $cpf == '77777777777' || 
                            $cpf == '88888888888' || 
                            $cpf == '99999999999') {
                        return estiloMsg('Informe um CPF valido!');
                            } else {   
                                //verifica se o cpf obedece a lei matematica
                                    for ($t = 9; $t < 11; $t++) {
                                        for ($d = 0, $c = 0; $c < $t; $c++) {
                                            $d += $cpf{$c} * (($t + 1) - $c);
                                        }
                                        $d = ((10 * $d) % 11) % 10;
                                    
                                    }if ($cpf{$c} != $d) {
                                        return estiloMsg('Informe um CPF valido!');
                                        }else{
                                        return 1;
                                            }
                            }
                        } 
                    }
        }

     
    function erro($msg= array()){///esta função serve para mostrar
        //verificando se a erros
        $txt_erro = '';
        $erro     = 0;

    foreach ($msg as $key => $value) { //Criando uma lista de mensagens
        if($value <> 1){
            $erro++;
            $txt_erro .='<div style="z-index: 100; position: absolute;margin-top:'.(4*$erro-(3.5)).'em;">'.$value.'</div>';
        }
    }

    if($erro <> 0){
        $_SESSION['MSG']=$txt_erro;
        return 0;
    }else{
        return 1;
    }
    }
}