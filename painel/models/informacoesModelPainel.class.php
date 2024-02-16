<?php 
    class informacoesModelPainel{
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
        }
    }
?>