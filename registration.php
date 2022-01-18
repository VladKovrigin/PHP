<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration</title>
    </head>
    <body>
        <form class="new-page" method="POST" action="form.php" enctype="multipart/form-data">
            <div>
                <label><input type="text" name="name" placeholder="Имя"></label>
            </div>
            <div>
                <label><input type="tel" name="number" placeholder="Номер телефона"></label>
            </div>
            <div>
                <label><input type="text" name="loginRegist" placeholder="Логин"></label>
            </div>
            <div>
                <label><input type="password" name="passwordRegist" placeholder="Пароль"></label>
            </div>
            <div>
                <label><input type="password" name="passwordAgain" placeholder="Повторите пароль"></label>
            </div>
            <div>
                <button type="submit" name="registration">Создать запись</button>
            </div>
        </form>
    </body>
</html>