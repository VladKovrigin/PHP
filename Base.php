<?php

namespace blog;

abstract class Base
{
    public string $login;
    protected string $password;
    public string $email;

    function setBase($login, $password)
    {
        if($login && $password) {

            $loginCorrect = false;
            $passwordCorrect = [false, false];

            if(strlen($login) >= 5) {
                $loginCorrect = true;
            }

            $passwordArray = mb_str_split($password);

            foreach ($passwordArray as $item) {
                if($item === mb_strtoupper($item)) {
                    $passwordCorrect[0] = true;
                }
                if(is_numeric($item)) {
                    $passwordCorrect[1] = true;
                }
                if($passwordCorrect[0] && $passwordCorrect[1]) {
                    $passwordCorrect = true;
                    break;
                }
            }

            if($passwordCorrect && $loginCorrect) {
                $this->login = $login;
                $this->password = $password;
            } else {
                include "index.php";
                echo "<h1>ПРОВЕРЬТЕ ПРАВИЛЬНОСТЬ ЗАПОЛНЕНИЯ</h1>";
            }

        } else {
            include "index.php";
            echo "<h1>ПРОВЕРЬТЕ ПРАВИЛЬНОСТЬ ЗАПОЛНЕНИЯ</h1>";
        }
    }
}
