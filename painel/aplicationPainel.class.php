<?php
    class aplicationPainel{
        public static function executar(){

            if(isset($_GET['logout'])){
                session_destroy();
            }

            if(isset($_SESSION['login'])){
                painelControllerPainel::executar();
            }else{
                loginControllerPainel::executar();
            }

/*             $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'home';
            $url .= 'Controller';
            if(file_exists("controllers/$url.class.php")){
                $url = 'controllers\\'.$url;
                $url::executar();
            }else{
                header('Location:'.ROOT_PATH);
                die();
            } */
        }
    }
?>