<?php 
    class homeController{
        public static function executar(){
            view::executar('home',self::listaVeiculos(),self::listaVeicDest(),null,self::getInformacoes());
        }
        public static function listaVeiculos(){
            return array_reverse(homeModel::listaVeiculos());
        }
        public static function listaVeicDest(){
            return array_reverse(homeModel::listaVeicDest());
        }
        public static function getInformacoes(){
            return informacoesModel::getInformacoes();
        }
    }
?>