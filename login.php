<?php

session_start();
$_SESSION['login'] = 'thisUserName';
$_SESSION['password'] = '202cb962ac59075b964b07152d234b70';

if(isset($_POST['login']) && isset($_POST['password'])) {
    setcookie('login', $_POST['login']);
    setcookie('password', $_POST['password']);
    $loginCorrect = false;
    $passwordCorrect = false;
    if($_POST['login'] === $_SESSION['login']) {
        $loginCorrect = true;
    }
    if(md5($_POST['password']) === $_SESSION['password']) {
        $passwordCorrect = true;
    }
    if($passwordCorrect && $loginCorrect) {
        header('Location: http://example.palmo/home.php');
    } else {
        header('Location: http://example.palmo/index.php');
    }
} else {
    header('Location: http://example.palmo/index.php');
}
if(isset($_POST['registration'])) {
    header('Location: /registration.html');
}
