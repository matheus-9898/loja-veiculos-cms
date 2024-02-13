<?php 
    class anuncioController{
        public static function executar(){
            view::executar('anuncio',null,null,self::dadosAnuncio());
        }
        public static function dadosAnuncio(){
            return anuncioModel::dadosAnuncio();
        }
    }
?>