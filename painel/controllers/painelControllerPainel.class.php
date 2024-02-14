<?php 
    class painelControllerPainel{
        public static function executar(){
            viewPainel::executar('painel',self::listaVeiculos(),self::getInformacoes());
        }
        public static function logout(){
            painelModelPainel::logout();
        }
        public static function addVeiculo(){
            painelModelPainel::addVeiculo();
        }
        public static function setInformacoes(){
            painelModelPainel::setInformacoes();
        }
        public static function listaVeiculos(){
            return array_reverse(painelModelPainel::listaVeiculos());
        }
        public static function delVeiculo(){
            painelModelPainel::delVeiculo();
        }
        public static function getInformacoes(){
            return painelModelPainel::getInformacoes();
        }
    }
?>