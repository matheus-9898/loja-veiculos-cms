<?php 
    class viewPainel{
        public static function executar($fileName,$listaVeiculos=null,$getInformacoes=null,$getMensagens=null){
            if($fileName == 'veiculos' || $fileName == 'informacoes' || $fileName == 'mensagens')
                include 'pages/templates/header.php';

            include "pages/$fileName.php";

            if($fileName == 'veiculos' || $fileName == 'informacoes' || $fileName == 'mensagens')
                include 'pages/templates/footer.php';

            include 'pages/templates/notify.php';
        }
    }
?>