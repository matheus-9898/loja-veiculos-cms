<?php 
    class mensagensModelPainel{
        public static function getMensagens(){
            $sql = mysqlModelPainel::conexaoBD()->prepare('SELECT * FROM mensagens');
            $sql->execute();
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $info;
        }
    }
?>