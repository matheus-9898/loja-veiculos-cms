<?php 
    class viewPainel{
        public static function executar($fileName,$listaVeiculos=null,$getInformacoes=null){
            if($fileName == 'veiculos' || $fileName == 'informacoes')
                include 'pages/templates/header.php';

            include "pages/$fileName.php";

            if($fileName == 'veiculos' || $fileName == 'informacoes')
                include 'pages/templates/footer.php';
        }
    }
?>