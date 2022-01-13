<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/main.css">
        <title>Start-page</title>
    </head>

    <body>
        <form id="form" method="POST" action="login.php" enctype="multipart/form-data">
            <label>
                <input type="text" name="login" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : ''?>">
            </label>
            <label>
                <input type="password" name="password" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''?>">
            </label>
            <button type="submit" class="submit">Войти</button>
        </form>
        <form method="POST" action="login.php" enctype="multipart/form-data">
            <button type="submit" class="submit to-registrate" name="registration">
                Зарегистрироваться
            </button>
        </form>
    </body>
</html>
