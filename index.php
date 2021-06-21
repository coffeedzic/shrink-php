<?php
    require_once('inc/redirect.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Simple PHP URL Shortener App">
        <meta name="keywords" content="Shrink PHP, URL Shortener, PHP, Simple App, Github">
        <meta name="author" content="Edin Kahvedžić">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <title>Shrink PHP - Simple PHP Web App</title>    
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://apps.coffeedzic.com/simple-alert/css/simple-alert.min.css">
        <script src="https://kit.fontawesome.com/bccf934f7c.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://apps.coffeedzic.com/simple-alert/js/simple-alert-0.0.1.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <div class="box">
                <div class="header">
                    <h1>Shrink PHP</h1>
                    <p>Simple PHP Web App</p>
                </div>
                <div class="shrink-php">
                    <input type="text" id="url" placeholder="url" autocomplete="off">
                    <div class="buttons">
                        <button class="shrink-btn">Shrink your URL</button>
                        <button class="copy-btn"><i class="fas fa-copy"></i></button>
                    </div>
                </div>
                <div class="response"></div>
            </div>
            <a class="nav-link" href="insight.php">Check # of redirects for your URL</a>
            <footer>
                <ul class="icons">
                    <li><a href="https://github.com/coffeedzic"><i class="fab fa-github" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/edin-kahved%C5%BEi%C4%87-497724197/"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.facebook.com/edincoffeedzic/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/edincoffeedzic/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
                <p>Created by <a href="https://coffeedzic.com/">Edin Kahvedžić</a></p>
            </footer>    
        </div>
        <script src="js/main.js"></script>     
    </body>
</html>