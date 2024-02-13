<?php
    class aplicationPainel{
        public static function executar(){

            if(isset($_POST['login'])){
                loginControllerPainel::logar($_POST['usuario'],$_POST['senha']);
            }
            if(isset($_POST['addVeic'])){
                painelControllerPainel::addVeiculo();
            }

            if(isset($_GET['logout'])){
                painelControllerPainel::logout();
            }
            if(isset($_GET['delVeiculo'])){
                painelControllerPainel::delVeiculo();
            }

            if(isset($_SESSION['login'])){//se logado
                painelControllerPainel::executar();
            }else{//se não logado
                loginControllerPainel::executar();
            }
        }
    }
?>