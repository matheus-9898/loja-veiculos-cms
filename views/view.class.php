<?php 
    class view{
        public static function executar($fileName,$listaVeiculos=null,$listaVeicDest=null,$dadosAnuncio=null){
            include "pages/templates/header.php";
            include "pages/$fileName.php";
            include "pages/templates/footer.php";
        }
    }
?>