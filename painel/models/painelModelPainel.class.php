<?php 
    class painelModelPainel{
        public static function logout(){
            session_destroy();
            header('Location: '.ROOT_PATH_PAINEL);
            die();
        }
        public static function addVeiculo(){
            $sql = mysqlModelPainel::conexaoBD()->prepare('INSERT INTO veiculos VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
            $sql->execute(array(null,$_POST['marca-modelo'],$_POST['desc-modelo'],$_POST['valor'],$_POST['ano'],$_POST['combustivel'],$_POST['km'],$_POST['final-placa'],$_POST['cor'],$_POST['unico-dono'],$_POST['quant-portas'],$_POST['opcionais'],$_POST['descricao'],$_POST['fotos'],$_POST['destaque']));
            //talves um redirect pra raíz do painel
        }
    }
?>