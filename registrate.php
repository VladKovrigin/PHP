<?php
if(isset($_POST['submit'])) {
    $newUser = [
        'login' => $_POST['login'],
        'address' => $_POST['address']
    ];
    $file = fopen('users.txt', 'w+');
    fwrite($file, $newUser['login'] . ' ' .  $newUser['address'] . PHP_EOL);
}

function deleteFile($path) {
    $fileInfo = stat($path);
    if($fileInfo['size'] >= (1024 * 1024)) {
        return unlink($path);
    }
    else {
        return 'файл слишком маленький для удаления';
    }
}
