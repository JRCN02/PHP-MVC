<?php
    //añadir librerias
    include_once 'config/config.php';
    include_once 'library/Controller.php';
    include_once 'library/Core.php';
    include_once 'library/DB.php';


    //autoload 
    /*spl_autoload_register(function($nombreClase ){
        require_once 'library/'.$nombreClase.'.php';
    });*/