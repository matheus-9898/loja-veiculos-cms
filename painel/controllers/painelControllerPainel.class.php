<?php 
    class painelControllerPainel{
        public static function executar(){
            viewPainel::executar('painel');
        }
        public static function logout(){
            painelModelPainel::logout();
        }
    }
?>