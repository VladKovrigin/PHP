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
        <form action="WriteNews.php" method="post" enctype="multipart/form-data">
            <div>
                <label><input type="text" name="newsName" placeholder="Название новости"></label>
            </div>
            <div>
                <label><input type="text" name="aboutNews" placeholder="Описание"></label>
            </div>
            <div>
                <label><input type="date" name="dateNews"></label>
            </div>
            <div>
                <label><input type="radio" name="choiceType" value="0">Черновик</label>
                <label><input type="radio" name="choiceType" value="1">Опубликовано</label>
            </div>
            <div>
                <label><textarea name="newsText"></textarea></label>
            </div>
            <div>
                <label><input type="text" name="author" placeholder="Автор"></label>
            </div>
            <div>
                <label><input type="file" name="imageNews"></label>
            </div>
            <div>
                <label><input type="submit"></label>
            </div>
        </form>

    </body>
</html>
