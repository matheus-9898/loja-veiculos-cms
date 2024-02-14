<?php 
    class viewPainel{
        public static function executar($fileName,$listaVeiculos=null){
            include "pages/$fileName.php";
        }
    }
?>