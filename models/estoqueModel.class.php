<?php 
    class estoqueModel{
        public static function listaVeiculos(){
            $sql = mysqlModel::conexaoBD()->prepare('SELECT * FROM veiculos');
            $sql->execute();
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $info;
        }
    }
?>