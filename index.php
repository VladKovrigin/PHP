<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/main.css">
        <title>HW-5</title>
    </head>
    <body>
        <?php
        $path = 'fruits.txt';
        $fruits = ['Авокадо', 'Яблоко', 'Бергамот', 'Груша', 'Слива', 'Чомпу', 'Хурма', 'Мандарин', 'Саподилла', 'Цитрон'];
        $file = fopen($path, 'w+');

        foreach ($fruits as $fruit) {
            fwrite($file, $fruit . PHP_EOL);
        }

        $newFruits = file($path);
        sort($newFruits);
        ?>

        <form method="POST" action="fileTxt.php" enctype="multipart/form-data">
            <input type="file" name="fileRead">
            <input type="submit">
        </form>

        <form method="POST" action="registrate.php" enctype="multipart/form-data">
            <div>
                <label>
                    <input type="text" name="login" placeholder="Логин/Почта">
                </label>
            </div>
            <div>
                <label>
                    <input type="password" name="password" placeholder="Пароль">
                </label>
            </div>
            <div>
                <label>
                    <input type="password" name="passwordAgain" placeholder="Пароль еще раз">
                </label>
            </div>
            <div>
                <label>
                    <input type="text" name="address" placeholder="Адрес">
                </label>
            </div>
            <div>
                <label>
                    <input type="submit" name="submit">
                </label>
            </div>
        </form>

    </body>
</html>

