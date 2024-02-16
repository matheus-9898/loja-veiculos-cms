<?php 
    class veiculosControllerPainel{
        public static function executar(){
            viewPainel::executar('veiculos',self::listaVeiculos(),null);
        }
        public static function logout(){
            painelModelPainel::logout();
        }

        public static function addVeiculo(){
            if($_POST['marca-modelo'] != '' && $_POST['desc-modelo'] != '' && $_POST['valor'] != '' && $_POST['ano'] != '' && $_POST['combustivel'] != '' && $_POST['km'] != '' && $_POST['final-placa'] != '' && $_POST['cor'] != '' && $_POST['unico-dono'] != '' && $_POST['quant-portas'] != '' && $_POST['opcionais'] != '' && $_POST['descricao'] != '' && $_POST['destaque'] != '' && $_FILES['fotos']['error'][0] != UPLOAD_ERR_NO_FILE){
                veiculosModelPainel::addVeiculo();
                header('Location: '.ROOT_PATH_PAINEL.'veiculos');
                die();
            }else{
                header('Location: '.ROOT_PATH_PAINEL.'veiculos');
                die();
            }
        }
        public static function listaVeiculos(){
            return array_reverse(veiculosModelPainel::listaVeiculos());
        }
        public static function delVeiculo(){
            veiculosModelPainel::delVeiculo();
            header('Location: '.ROOT_PATH_PAINEL.'veiculos');
            die();
        }
        public static function alterarDestaque(){
            veiculosModelPainel::alterarDestaque();
            header('Location: '.ROOT_PATH_PAINEL.'veiculos');
            die();
        }
    }
?>