<?php 
    class contatoModel{
        public static function inputMensagem(){
            $sql = mysqlModel::conexaoBD()->prepare('INSERT INTO mensagens VALUES (?,?,?,?,?)');
            $sql->execute(array(null,$_POST['nome'],$_POST['email'],$_POST['telefone'],$_POST['mensagem']));
            header('Location: '.ROOT_PATH.'contato');
            die();
        }
    }
?>