<?php 
    class anuncioModel{
        public static function dadosAnuncio(){
            $sql = mysqlModel::conexaoBD()->prepare('SELECT * FROM veiculos WHERE id = ?');
            $sql->execute(array($_GET['id']));
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $info;
        }
    }
?>