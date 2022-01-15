<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
    </head>
    <body>
        <?php echo 'Здравствуйте, ' . $_SESSION['login'] . "<br>"; ?>

        <form name="logout" action="form.php" method="post" enctype="multipart/form-data">
            <input type="submit" name="logout" value="Выйти">
        </form>
    </body>
</html>
