<?php

namespace blog\WriteNews;

class News {
    public string $name;
    public string $aboutNews;
    public string $author;
    public string $newsDate;
    public string $textNews;
    public string $choiceType;
    public string $pathImage;

    public function validate()
    {
        $correctName = false;
        $correctAbout = false;
        $correctAuthor = false;
        $correctTextNews = false;
        $correctImage = false;

        if($_POST['newsName']) {
            $correctName = true;
        }
        if(strlen($_POST['aboutNews']) >= 20) {
            $correctAbout = true;
        }
        if(!$_POST['dateNews']) {
            $_POST['dateNews'] = date("d-m-Y");
        }

        if(!isset($_POST['choiceType'])) {
            $_POST['choiceType'] = 'Опубликовано';
        } else {
            $_POST['choiceType'] = 'Черновик';
        }
        if(strlen($_POST['newsText']) >= 100) {
            $correctTextNews = true;
        }
        if($_POST['author']) {
            $correctAuthor = true;
        }

        $typeFile = explode('/', $_FILES['imageNews']['type']);
        if($typeFile[0] === 'image') {
            $correctImage = true;
        }

        if($correctAuthor && $correctTextNews && $correctAbout && $correctName && $correctImage) {
            return 1;
        }
    }

    private function setCookie() {
        if(isset($_COOKIE['news'])) {
            $allNews = json_decode($_COOKIE['news']);
        }
        $allNews[] = $this;
        setcookie('news', json_encode($allNews));
    }
    public function __construct()
    {
        if($this->validate()) {
            $this->name = $_POST['newsName'];
            $this->aboutNews = $_POST['aboutNews'];
            $this->newsDate = $_POST['dateNews'];
            $this->choiceType = $_POST['choiceType'];
            $this->textNews = $_POST['newsText'];
            $this->author = $_POST['author'];

            $filename = $_FILES['imageNews']['name'];
            $current_path = $_FILES['imageNews']['tmp_name'];
            $new_path = dirname(__FILE__) . '/img/' . $filename;
            $file_path = 'img/' . $filename;
            move_uploaded_file($current_path, $new_path);
            $this->pathImage = $file_path;

            $this->setCookie();
        } else {
            include 'addNews.php';
            echo "<h1>ПРОВЕРЬТЕ ПРАВИЛЬНОСТЬ ЗАПОЛНЕНИЯ</h1>";
        }
    }
}

$news = new News();
include "index.php";