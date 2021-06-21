<?php

    /**
     * Shrink PHP
     * autoloader.php - Class autoloader
     * 
     * @author    Edin Kahvedžić <edin@coffeedzic.com>
     * @version   1.0.0
     */

    // Loading our register

    spl_autoload_register('myAutoloader');

    /**
     * Function for loading all files in class folder with extension .class.php 
     * 
     * @return string
     */

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