<?php

    define('SITE_ROOT', $_SERVER["DOCUMENT_ROOT"]);

    spl_autoload_register('myAutoloader');

    function myAutoloader($class_name) {
        $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $ext = '.class.php';
        if(strpos($url, 'inc')) {
            $path = '../classes/';
        } else {
            $path = 'classes/';
        }
        $class_name = strtolower($class_name);
        $fullname = $path . $class_name . $ext;
        if(!file_exists($fullname)) {
            return;
        }
        require_once $fullname;
    }

?>