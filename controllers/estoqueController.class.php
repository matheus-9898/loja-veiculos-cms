<?php 
    class estoqueController{
        public static function executar(){
            view::executar('estoque',self::listaVeiculos());
        }
        public static function listaVeiculos(){
            return array_reverse(estoqueModel::listaVeiculos());
        }
    }
?>