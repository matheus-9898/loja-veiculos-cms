<?php 
    class contatoController{
        public static function executar(){
            view::executar('contato',null,null,null,self::getInformacoes());
        }
        public static function getInformacoes(){
            return informacoesModel::getInformacoes();
        }
    }
?>