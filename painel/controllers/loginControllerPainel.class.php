<?php 
    class loginControllerPainel{
        public static function executar(){
            viewPainel::executar('login');
        }
        public static function logar($usuario,$senha){
            loginModelPainel::logar($usuario,$senha);
        }
    }
?>