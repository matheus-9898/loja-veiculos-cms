<?php 
    class informacoesControllerPainel{
        public static function executar(){
            viewPainel::executar('informacoes',null,self::getInformacoes());
        }
        public static function logout(){
            painelModelPainel::logout();
        }

        
        public static function getInformacoes(){
            return informacoesModelPainel::getInformacoes();
        }
        public static function setInformacoes(){
            informacoesModelPainel::setInformacoes();
            header('Location: '.ROOT_PATH_PAINEL.'informacoes');
            die();
        }
    }
?>