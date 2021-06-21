<?php

    /**
     * Shrink PHP
     * insight.inc.php - Insight - Check # of redirects for entered link
     *
     * @author    Edin Kahvedžić <edin@coffeedzic.com>
     * @version   1.0.0
     */

    // Requiring our autoloader

    require_once('autoloader.php');

    // If $_POST['insight] is set check for code. If code exists in our database, grab that row from database

    if(isset($_POST['insight'])) {
        $url = $_POST['url'];
        $array = explode('/', $url);
        $code = end($array);
        $redirects = Shrink::findIt($code, 'code');
        echo json_encode($redirects);
    }
    
?>