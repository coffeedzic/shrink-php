<?php

    /**
     * Shrink PHP
     * redirect.inc.php - Redirect
     *
     * @author    Edin Kahvedžić <edin@coffeedzic.com>
     * @version   1.0.0
     */

    // Requiring our autoloader

    require_once('autoloader.php');

    // If we get code via $_GET['redirect], redirect to that page if code exists

    if(isset($_GET['redirect'])) {
        $url = $_GET['redirect'];
        $args = Shrink::findIt($url, 'code');
        $args['redirects'] = $args['redirects'] + 1;
        $redirect = new Shrink($args);
        $redirect->save();
        Header('Location: ' . $args['url']);
        exit();
    }

?>