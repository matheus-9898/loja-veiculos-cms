<?php 
    class loginModelPainel{
        public static function logar($usuario,$senha){
            $sql = mysqlModelPainel::conexaoBD()->prepare('SELECT * FROM usuarios WHERE usuario=? AND senha=?');
            $sql->execute(array($usuario,$senha));
            if($sql->rowCount() == 1){
                $_SESSION['login'] = true;
                header('Location: '.ROOT_PATH_PAINEL);
                die();
            }else{
                echo "<script>alert('Dados inválidos.');</script>";
            }
        }
    }
?>