<?php 
    class localizacaoController{
        public static function executar(){
            view::executar('localizacao',null,null,null,self::getInformacoes());
        }
        public static function getInformacoes(){
            return informacoesModel::getInformacoes();
        }
    }
?>