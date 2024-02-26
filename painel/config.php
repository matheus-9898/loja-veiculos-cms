<?php 
    session_start();

    function autoloadPainel($class){
        if(file_exists("$class.class.php"))
            include "$class.class.php";
        else if(file_exists("controllers/$class.class.php"))
            include "controllers/$class.class.php";
        else if(file_exists("models/$class.class.php"))
            include "models/$class.class.php";
        else if(file_exists("views/$class.class.php"))
            include "views/$class.class.php";
    }
    spl_autoload_register('autoloadPainel');
    
    define('ROOT_PATH_PAINEL','https://matheusm.online/loja_veiculos_cms/painel/');
    define('ROOT_PATH','https://matheusm.online/loja_veiculos_cms/');

    date_default_timezone_set('America/Sao_Paulo');

    define('HOST','162.241.2.230');
    define('BDNAME','ondigc37_loja_veiculos_cms');
    define('USER','ondigc37_matheus');
    define('PASS','Stifler.28');
?>