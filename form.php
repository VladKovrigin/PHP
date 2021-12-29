<?php
if(isset($_POST) && isset($_POST['send-form'])) {
    print("Ваш город: " . $_POST['city'] . "\n");
    if(isset($_POST['age'])) {
        if($_POST['age'] === '0') {
            print('Менее 20 лет');
        }
        if($_POST['age'] === '1') {
            print('20-25 лет');
        }
        if($_POST['age'] === '2') {
            print('25-30 лет');
        }
        if($_POST['age'] === '3') {
            print('больше 30');
        }
    }
}


if(isset($_POST) && isset($_POST['send-product'])) {
    echo "<div>Название продукта " . $_POST['name-product'] . "</div>";
    echo  "<div>Производитель " . $_POST['producer'] . "</div>";
    echo "<div>Краткое описание товара" . $_POST['about'] . "</div>";
    if(isset($_FILES['imageItem'])) {
        $file = $_FILES['imageItem'];
        $current_path = $_FILES['imageItem']['tmp_name'];
        $fileName = $_FILES['imageItem']['name'];
        $new_path = dirname(__FILE__) . "/uploads/" . $fileName;
        $file_path = "uploads/" . $fileName;
        move_uploaded_file($current_path, $new_path);
        echo "<img src='{$file_path}'>";
    }
}

if(isset($_POST) && isset($_POST['submit-test'])) {
    $myMark = 0;
    if($_POST['question'] && $_POST['question'] === '1'){
        $myMark++;
    }

    if($_POST['question'] === '3' && $_POST['question']) {
        $myMark++;
    }
    if($_POST['question'] && $_POST['question'] === '4') {
        $myMark++;
    }

    echo $myMark;
}
