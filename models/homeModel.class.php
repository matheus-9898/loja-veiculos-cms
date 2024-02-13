<?php 
    class homeModel{
        public static function listaVeiculos(){
            $sql = mysqlModel::conexaoBD()->prepare('SELECT * FROM veiculos');
            $sql->execute();
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $info;
        }
        public static function listaVeicDest(){
            $sql = mysqlModel::conexaoBD()->prepare('SELECT * FROM veiculos WHERE destaque != ?');
            $sql->execute(array('0'));
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $info;
        }
    }
?>