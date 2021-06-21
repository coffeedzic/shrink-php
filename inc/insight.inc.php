<?php
    require_once('autoloader.php');

    if (isset($_POST['insight'])) {
        $url = $_POST['url'];
        $array = explode('/', $url);
        $code = end($array);
        $redirects = Shrink::findIt($code, 'code');
        echo json_encode($redirects);
    }
?>