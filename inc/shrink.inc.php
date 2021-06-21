<?php
    require_once('autoloader.php');

    if (isset($_POST['shrink'])) {
        if(filter_var($_POST['url'], FILTER_VALIDATE_URL)) {
            $args['url'] = $_POST['url'];
            $args['redirects'] = 0;
            $str_pattern = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
            do {
                $args['code'] = substr(str_shuffle($str_pattern), 0, 5);
                $code_exists = Shrink::findIt($args['code'], 'code');
            } while ($code_exists);
            
            if($args['code']) {
                $shrink = new Shrink($args);
                $shrink->save();
                echo json_encode($args);
            }
        } else {
            $arr['error'] = 'Error';
            echo json_encode($arr);
        }
    }
?>