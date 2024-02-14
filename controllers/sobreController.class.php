<?php 
    class sobreController{
        public static function executar(){
            view::executar('sobre',null,null,null,self::getInformacoes());
        }
        public static function getInformacoes(){
            return informacoesModel::getInformacoes();
        }
    }
?>