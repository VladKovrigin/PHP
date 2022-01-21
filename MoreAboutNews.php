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

    $allNews = json_decode($_COOKIE['news'], true);
    $newsNumber = array_search('Подробнее', $_POST);
    $thisNews = $allNews[$newsNumber];

    ?>
    <div><?php echo $thisNews['choiceType']?></div>
    <div><?php echo $thisNews['name']?></div>
    <div><?php echo $thisNews['author']?></div>
    <div><?php echo $thisNews['newsDate']?></div>
    <div><?php echo $thisNews['aboutNews']?></div>
    <div><?php echo $thisNews['textNews']?></div>
    <?php echo "<img src='{$thisNews['pathImage']}'>"?>
</body>
</html>
