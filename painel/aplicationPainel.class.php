<?php
    class aplicationPainel{
        public static function executar(){

            if(isset($_POST['login'])){
                loginControllerPainel::logar($_POST['usuario'],$_POST['senha']);
            }

            if(isset($_GET['logout'])){
                painelControllerPainel::logout();
            }

            if(isset($_SESSION['login'])){
                painelControllerPainel::executar();
            }else{
                loginControllerPainel::executar();
            }
        }
    }
?>