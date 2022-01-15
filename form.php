<?php
session_start();


$_SESSION['login'] = 'thisUserName';
$_SESSION['password'] = '202cb962ac59075b964b07152d234b70';

if (isset($_POST['login']) && isset($_POST['password'])) {
    setcookie('login', $_POST['login']);
    $loginCorrect = false;
    $passwordCorrect = false;
    if ($_POST['login'] === $_SESSION['login']) {
        $loginCorrect = true;
    }
    if (md5($_POST['password']) === $_SESSION['password']) {
        $passwordCorrect = true;
    }
    if ($loginCorrect && $passwordCorrect) {
        include 'home.php';
    }
}

if(isset($_POST['logout'])) {
    session_destroy();
    include 'index.php';
}

if(isset($_POST['registration'])) {
    if($_POST['password'] === $_POST['passwordAgain']) {
        $_SESSION['name'] = trim($_POST['name']);
        $_SESSION['number'] = trim($_POST['number']);
        $_SESSION['login'] = trim($_POST['login']);
        $_SESSION['password'] = trim($_POST['password']);
        setcookie('name', $_SESSION['name']);
        setcookie('login', $_SESSION['login']);
        setcookie('tel', $_SESSION['number']);
        if((int)$_POST['number'] && strlen($_POST['number']) === 10) {
            include 'home.php';
        } else {
            include 'registration.php';
        }
    }
}