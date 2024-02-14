<?php 
    class painelModelPainel{
        public static function logout(){
            session_destroy();
            header('Location: '.ROOT_PATH_PAINEL);
            die();
        }
        public static function addVeiculo(){
            
            $nameBD = '';
            $quantFotos = count($_FILES['fotos']['name']);

            for($i=0; $i<$quantFotos ;$i++){
                $tipo = explode('/',$_FILES['fotos']['type'][$i])[1];
                $name = 'img'.$i.'_'.$_POST['final-placa'].$_POST['km'].'.'.$tipo;

                move_uploaded_file($_FILES['fotos']['tmp_name'][$i],"../views/imagens/anuncios/$name");

                $nameBD = $nameBD.$name.'/';
            }

            $sql = mysqlModelPainel::conexaoBD()->prepare('INSERT INTO veiculos VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
            $sql->execute(array(null,$_POST['marca-modelo'],$_POST['desc-modelo'],$_POST['valor'],$_POST['ano'],$_POST['combustivel'],$_POST['km'],$_POST['final-placa'],$_POST['cor'],$_POST['unico-dono'],$_POST['quant-portas'],$_POST['opcionais'],$_POST['descricao'],$nameBD,$_POST['destaque']));
            header('Location: '.ROOT_PATH_PAINEL);
            die();
        }
        public static function listaVeiculos(){
            $sql = mysqlModelPainel::conexaoBD()->prepare('SELECT * FROM veiculos');
            $sql->execute();
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $info;
        }
        public static function delVeiculo(){
            $sql = mysqlModelPainel::conexaoBD()->prepare('DELETE FROM veiculos WHERE id=?');
            $sql->execute(array($_GET['delVeiculo']));
            header('Location: '.ROOT_PATH_PAINEL);
            die();
        }
        public static function getInformacoes(){
            $sql = mysqlModelPainel::conexaoBD()->prepare('SELECT * FROM informacoes');
            $sql->execute();
            $info = $sql->fetch(PDO::FETCH_ASSOC);
            return $info;
        }
        public static function setInformacoes(){

            if($_FILES['sobreImg']['error'] == UPLOAD_ERR_NO_FILE){//se file não foi preenchido

                $imgNameBD = $_POST['imgNameBD'];

            }else{// se file foi preenchido
                
                $tipo = explode('/',$_FILES['sobreImg']['type'])[1];
                $imgNameBD = 'img-sobre.'.$tipo;
   
                move_uploaded_file($_FILES['sobreImg']['tmp_name'],"../views/imagens/$imgNameBD");
            }

            $sql = mysqlModelPainel::conexaoBD()->prepare('UPDATE informacoes SET whatsapp=?,tel_cont=?,email=?,endereco=?,cidade=?,sobre=?,instagram=?,facebook=?,tiktok=?,imagem_sobre=?,atendimento_2a6a=?,atendimento_sab=?');
            $sql->execute(array($_POST['numZap'],$_POST['telCont'],$_POST['email'],$_POST['endereco'],$_POST['cidade'],$_POST['sobre'],$_POST['linkInsta'],$_POST['linkFace'],$_POST['linkTiktok'],$imgNameBD,$_POST['atend2a6a'],$_POST['atendSab']));
            header('Location: '.ROOT_PATH_PAINEL);
            die();
        }
    }
?>