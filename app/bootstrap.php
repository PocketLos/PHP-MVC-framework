<?php
    //Load Config
    require_once 'config/config.php';

    // Autload Core library
    spl_autoload_register(function($className) {
        require_once 'libraries/'. $className .'.php';
    });