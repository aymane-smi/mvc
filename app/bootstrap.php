<?php
    require_once __DIR__."/libraries/Controllers.php";
    require_once __DIR__."/libraries/Core.php";
    require_once __DIR__."/libraries/DB.php";

    spl_autoload_register(function($classname){
        require_once ("libraries/".$classname.".php");
    });
?>