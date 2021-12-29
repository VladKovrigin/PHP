<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/main.css">
        <title>Document</title>
    </head>

    <body>
        <form name="feedback" method="POST" action="form.php" enctype="multipart/form-data">
            <h2>1 И 2 ЗАДАНИЯ</h2>
            <label>Ваш город: <input type="text" name="city"></label>
            <div>
                <div>
                    <label>
                        <input type="radio" name="age" value="0">Менее 20 лет
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="age" value="1">20-25 лет
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="age" value="2">25-30 лет
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="age" value="3">более 30
                    </label>
                </div>
            </div>
            <input type="submit" name="send-form" value="Отправить">
        </form>

        <form name="product" method="POST" action="form.php" enctype="multipart/form-data">
            <h2>ФОРМА СОЗДАНИЯ ТОВАРА</h2>
            <div>
                <label>
                    <input name="name-product" placeholder="Название продукта">
                </label>
            </div>
            <div>
                <label>
                    <input name="producer" placeholder="Производитель">
                </label>
            </div>
            <div>
                <label>
                    <textarea name="about" placeholder="Краткое описание"></textarea>
                </label>
            </div>
            <div>
                <label>
                    <input type="file" name="imageItem">
                </label>
            </div>
            <div>
                <input type="submit" name="send-product" value="Отправить">
            </div>
        </form>

        <form name="test" method="POST" action="form.php">
            <h2>ФОРМА СОЗДАНИЯ ТОВАРА</h2>
            <div >
                <label>
                    Напишите число Пи
                    <input name="pi">
                </label>
            </div>
            <div>
                <p>Год крещения Руси</p>
                <div>
                    <label>
                        <input type="radio" name="question" value="val0">987
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="question" value="val1">988
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="question" value="val2">889
                    </label>
                </div>
            </div>

            <div>
                <div>
                    <p>Теория графов рассматривает такие виды связей</p>
                </div>
                <div>
                    <label>
                        <input type="checkbox" name="question21" value="val0">Ориентированные графы
                    </label>
                </div>
                <div>
                    <label>
                        <input type="checkbox" name="question22" value="val1">Неориентированные графы
                    </label>
                </div>
                <div>
                    <label>
                        <input type="checkbox" name="question23" value="val2">Полуориентированные графы
                    </label>
                </div>
            </div>
            <div>
                <input type="submit" name="submit-test" value="Отправить">
            </div>
        </form>

    </body>
</html>
