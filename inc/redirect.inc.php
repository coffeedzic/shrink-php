<?php
    require_once('autoloader.php');

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