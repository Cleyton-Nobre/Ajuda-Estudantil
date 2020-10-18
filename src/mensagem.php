<?php
        function estiloMsg($msg){
            return '<div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                    <span>'.$msg.'</span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="close()">
                        <span aria-hidden="true" >&times;</span>
                    </button>
                </div>' ;                  
            }

              //Mensagens de retorno
    define('SUCESSO', '<div class="alert alert-success alert-dismissible fade show mt-2" role="alert" style="z-index: 100; position: absolute;">
    <span >Operação realizada com sucesso!</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');

define('ERRO','<div class="alert alert-danger alert-dismissible fade show mt-2" role="alert" style="z-index: 100; position: absolute;">
    <span> Não foi possivel concluir operção!</span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>');
