<?php 
    class painelControllerPainel{
        public static function logout(){
            painelModelPainel::logout();
            header('Location: '.ROOT_PATH_PAINEL);
            die();
        }
    }
?>