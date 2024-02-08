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
    
    define('ROOT_PATH_PAINEL','http://localhost/projetos/loja-veiculos-cms/painel/');

    date_default_timezone_set('America/Sao_Paulo');

    define('HOST','localhost');
    define('BDNAME','loja_veiculos_cms');
    define('USER','root');
    define('PASS','');
?>