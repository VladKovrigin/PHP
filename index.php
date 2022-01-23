<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home work 7</title>
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <form name="authorization" id="Authorization" method="post" action="Authorization.php" enctype="multipart/form-data">
            <div>
                <label>
                    <input type="text" name="authorizeLogin" placeholder="Логин"
                           value="<?php if(isset($_COOKIE['login'])) echo $_COOKIE['login']?>">
                </label>
            </div>
            <div>
                <label>
                    <input type="password" name="authorizePassword" placeholder="Пароль">
                </label>
            </div>
            <div>
                <label>
                    <input type="checkbox" name="rememberMe">Запомнить меня
                </label>
            </div>
            <div>
                <label>
                    <input type="submit" name="to-authorization">
                </label>
            </div>
        </form>

        <form name="registration" id="Registration" method="post" action="Registration.php" enctype="multipart/form-data">
            <div>
                <label>
                    <input type="text" name="registrationLogin" placeholder="Логин">
                </label>
            </div>
            <div>
                <label>
                    <input type="password" name="registrationPassword" placeholder="Пароль">
                </label>
            </div>
            <div>
                <label>
                    <input type="email" name="registrationEmail" placeholder="Электронная почта">
                </label>
            </div>
            <div>
                <label>
                    <input type="file" name="avatar">
                </label>
            </div>
            <div>
                <label>
                    <input type="submit" name="to-registration">
                </label>
            </div>
        </form>
    </body>
</html>