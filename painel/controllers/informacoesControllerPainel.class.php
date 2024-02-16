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
            if(trim($_POST['numZap']) != '' && trim($_POST['telCont']) != '' && trim($_POST['email']) != '' && trim($_POST['endereco']) != '' && trim($_POST['cidade']) != '' && trim($_POST['atend2a6a']) != '' && trim($_POST['atendSab']) != '' && trim($_POST['linkInsta']) != '' && trim($_POST['linkFace']) != '' && trim($_POST['linkTiktok']) != '' && trim($_POST['sobre']) != ''){
                try {
                    informacoesModelPainel::setInformacoes();
                } catch (Exception $e) {
                    self::notify('Erro ao alterar as informações. Tente novamente.','error');
                    self::redirect();
                }
                self::notify('Destaque alterado com sucesso.','success');
                self::redirect();
            }else{
                self::notify('Dados inválidos ou incompletos.','error');
                self::redirect();
            }
        }

        private static function notify($msg,$type){
            $_SESSION['notifyMsg'] = $msg;
            $_SESSION['notifyType'] = $type;
        }
        
        private static function redirect(){
            header('Location: '.ROOT_PATH_PAINEL.'informacoes');
            die();
        }
    }
?>