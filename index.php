<?php
    require_once ('Routes.php');

    // function __autoload($class_name) {
    //     require_once ('./classes/'.$class_name.'.php');
    // }

    spl_autoload_register(function ($class) {
        if (file_exists('./classes/' . $class . '.php')){
            include './classes/' . $class . '.php';
        } else if (file_exists('./application/controller/' . $class . '.php')){
            include './application/controller/' . $class . '.php';
        }
    });
