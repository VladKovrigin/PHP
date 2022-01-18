<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LogIn</title>
    </head>

    <body>
        <form name="login" method="POST" action="form.php" enctype="multipart/form-data">
            <div>
                <label>
                    <input type="text" name="login" placeholder="Логин"
                              value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : ''; ?>">
                </label>
            </div>
            <div>
                <label>
                    <input type="password" name="password" placeholder="Пароль"
                              value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''; ?>">
                </label>
            </div>
            <input type="submit" value="Авторизация">
        </form>
    </body>
</html>