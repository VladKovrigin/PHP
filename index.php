<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <title>Start page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body>
        <?php
        if (isset($_SESSION)){
            if ($_SESSION){
                include 'home.php';
                exit();
            }
        }
        ?>
            <a href="registration.php">
                <button>Регистрация</button>
            </a>
            <a href="login.php">
                <button>Авторизация</button>
            </a>

    </body>
</html>