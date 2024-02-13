<?php 
    class view{
        public static function executar($fileName,$listaVeiculos=null){
            include "pages/templates/header.php";
            include "pages/$fileName.php";
            include "pages/templates/footer.php";
        }
    }
?>