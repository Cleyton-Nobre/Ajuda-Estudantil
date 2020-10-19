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