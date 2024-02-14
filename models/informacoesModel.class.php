<?php 
    class informacoesModel{
        public static function getInformacoes(){
            $sql = mysqlModel::conexaoBD()->prepare('SELECT * FROM informacoes');
            $sql->execute();
            $info = $sql->fetch(PDO::FETCH_ASSOC);
            return $info;
        }
    }
?>