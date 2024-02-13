<?php 
    class aplication{
        public static function executar(){
            if(isset($_GET['id'])){
                anuncioController::dadosAnuncio($_GET['id']);
            }

            $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'home';
            $url .= 'Controller';
            if(file_exists("controllers/$url.class.php")){
                $url::executar();
            }else{
                header('Location:'.ROOT_PATH);
                die();
            }
        }
    }
?>