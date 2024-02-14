<?php 
    class anuncioController{
        public static function executar(){
            view::executar('anuncio',null,null,self::dadosAnuncio(),self::getInformacoes());
        }
        public static function dadosAnuncio(){
            return anuncioModel::dadosAnuncio();
        }
        public static function getInformacoes(){
            return informacoesModel::getInformacoes();
        }
    }
?>