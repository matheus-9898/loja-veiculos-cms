<?php 
    class mensagensControllerPainel{
        public static function executar(){
            viewPainel::executar('mensagens',null,null,self::getMensagens());
        }

        public static function getMensagens(){
            return array_reverse(mensagensModelPainel::getMensagens());
        }
    }
?>