<?php 
    class estoqueController{
        public static function executar(){
            view::executar('estoque',self::listaVeiculos(),null,null,self::getInformacoes());
        }
        public static function listaVeiculos(){
            return array_reverse(estoqueModel::listaVeiculos());
        }
        public static function getInformacoes(){
            return informacoesModel::getInformacoes();
        }
    }
?>