<?php 
    class veiculosControllerPainel{
        public static function executar(){
            viewPainel::executar('veiculos',self::listaVeiculos(),null);
        }
        public static function logout(){
            painelModelPainel::logout();
        }

        public static function addVeiculo(){
            if(trim($_POST['marca-modelo']) != '' && trim($_POST['desc-modelo']) != '' && trim($_POST['valor']) != '' && trim($_POST['ano']) != '' && trim($_POST['combustivel']) != '' && trim($_POST['km']) != '' && trim($_POST['final-placa']) != '' && trim($_POST['cor']) != '' && trim($_POST['unico-dono']) != '' && trim($_POST['quant-portas']) != '' && trim($_POST['opcionais']) != '' && trim($_POST['descricao']) != '' && trim($_POST['destaque']) != '' && $_FILES['fotos']['error'][0] != UPLOAD_ERR_NO_FILE){
                try{
                    veiculosModelPainel::addVeiculo();
                }catch (Exception $e) {     
                    self::notify('Erro ao adicionar o veículo. Tente novamente.','error');
                    self::redirect();
                }
                self::notify('Veículo adicionado com sucesso.','success');
                self::redirect();
                
            }else{
                self::notify('Dados inválidos ou incompletos.','error');
                self::redirect();
            }
        }
        public static function listaVeiculos(){
            return array_reverse(veiculosModelPainel::listaVeiculos());
        }

        public static function delVeiculo(){
            try {
                veiculosModelPainel::delVeiculo();
            } catch (Exception $e) {
                self::notify('Erro ao deletar veículo. Tente novamente.','error');
                self::redirect();
            }
            self::notify('Veículo deletado com sucesso.','success');
            self::redirect();
        }

        public static function alterarDestaque(){
            try {
                veiculosModelPainel::alterarDestaque();
            } catch (Exception $e) {
                self::notify('Erro ao alterar destaque. Tente novamente.','error');
                self::redirect();
            }
            self::notify('Destaque alterado com sucesso.','success');
            self::redirect();
        }

        private static function notify($msg,$type){
            $_SESSION['notifyMsg'] = $msg;
            $_SESSION['notifyType'] = $type;
        }
        
        private static function redirect(){
            header('Location: '.ROOT_PATH_PAINEL.'veiculos');
            die();
        }
    }
?>