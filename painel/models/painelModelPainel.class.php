<?php 
    class painelModelPainel{
        public static function logout(){
            session_destroy();
            header('Location: '.ROOT_PATH_PAINEL);
            die();
        }
    }
?>