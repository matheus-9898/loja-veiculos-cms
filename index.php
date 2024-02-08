<?php 
    include 'config.php';

    function autoload($class){
        if(file_exists("$class.class.php"))
            include "$class.class.php";
        else if(file_exists("controllers/$class.class.php"))
            include "controllers/$class.class.php";
        else if(file_exists("views/$class.class.php"))
            include "views/$class.class.php";
    }
    spl_autoload_register('autoload');

    aplication::executar();
?>