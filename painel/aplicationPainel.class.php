<?php
    class aplicationPainel{
        public static function executar(){

            if(isset($_POST['login'])){
                loginControllerPainel::logar($_POST['usuario'],$_POST['senha']);
            }

            if(isset($_GET['logout'])){
                painelControllerPainel::logout();
            }

            if(isset($_POST['addVeic'])){
                veiculosControllerPainel::addVeiculo();
            }
            if(isset($_GET['delVeiculo'])){
                veiculosControllerPainel::delVeiculo();
            }
            if(isset($_GET['destaque']) && isset($_GET['id'])){
                veiculosControllerPainel::alterarDestaque();
            }

            if(isset($_POST['formInfo'])){
                informacoesControllerPainel::setInformacoes();
            }
            
            if(isset($_SESSION['login'])){//se logado
                
                $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'veiculos';
                $url .= 'ControllerPainel';
                
                if(file_exists("controllers/$url.class.php")){
                    $url::executar();
                }else{
                    header('Location:'.ROOT_PATH_PAINEL);
                    die();
                }
            }else{//se não logado
                loginControllerPainel::executar();
            }
        }
    }
?>