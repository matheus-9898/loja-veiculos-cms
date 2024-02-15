<?php 
    class veiculosControllerPainel{
        public static function executar(){
            viewPainel::executar('veiculos',self::listaVeiculos(),null);
        }
        public static function logout(){
            painelModelPainel::logout();
        }

        public static function addVeiculo(){
            veiculosModelPainel::addVeiculo();
        }
        public static function listaVeiculos(){
            return array_reverse(veiculosModelPainel::listaVeiculos());
        }
        public static function delVeiculo(){
            veiculosModelPainel::delVeiculo();
        }
        public static function alterarDestaque(){
            veiculosModelPainel::alterarDestaque();
        }
    }
?>