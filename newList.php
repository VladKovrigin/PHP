<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Список новостей</title>
    </head>
    <body>
        <?php
        $allNews = json_decode($_COOKIE['news'], true);
        for($news = 0; $news <= count($allNews)-1; $news++) {
            echo "<form method='post' name='{$allNews[$news]['name']}' action='MoreAboutNews.php' enctype='multipart/form-data'>";
            echo "<div>" . $allNews[$news]['name'] . "</div>";
            echo "<div>Автор: " . $allNews[$news]['author'] . "</div>";
            echo "<div>Дата: " . $allNews[$news]['newsDate'] . "</div>";
            echo "<div>Краткое описание: " . $allNews[$news]['aboutNews'] . "</div>";
            echo "<input type='submit' name='{$news}' value='Подробнее'></form>";
        }

        ?>
    </body>
</html>