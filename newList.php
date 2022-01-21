<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
        var_dump($_COOKIE['news']);

        $allNews = json_decode($_COOKIE['news']);
        var_dump($allNews);
        var_dump();

        foreach($allNews as $news) {
            echo $news['name'] . "<br>";
            echo $news['author']  . "<br>";
            echo $news['newsDate'] . "<br>";
            echo $news['aboutNews']  . "<br><br>";
        }
        $pathImage = $allNews[0]['pathImage'];
        echo "<img src='$pathImage'>";

        ?>
    </body>
</html>