<?php 
    class viewPainel{
        public static function executar($fileName,$listaVeiculos=null,$getInformacoes=null){
            include "pages/$fileName.php";
        }
    }
?>