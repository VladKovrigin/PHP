<?php

namespace blog;

abstract class Base
{
    public string $login;
    protected string $password;
    public string $email;

    abstract protected function validate();

    protected function checkLogin($login) {
        if(strlen($login) >= 5) {
            return true;
        } else {
            return false;
        }
    }

    protected function checkPassword($password) {
        $password = mb_str_split($password);
        $passwordCorrect = [false, false];

        foreach ($password as $item) {
            if($item === mb_strtoupper($item)) {
                $passwordCorrect[0] = true;
            }
            if(is_numeric($item)) {
                $passwordCorrect[1] = true;
            }
            if($passwordCorrect[0] && $passwordCorrect[1]) {
                return true;
            }
        }
        return false;
    }

    protected function errorValidate() {
        include "index.php";
        echo "<h1>ПРОВЕРЬТЕ ПРАВИЛЬНОСТЬ ЗАПОЛНЕНИЯ</h1>";
    }

    function setBase($login, $password)
    {
        if($login && $password) {
            if($this->checkLogin($login) && $this->checkPassword($password)) {
                $this->login = $login;
                $this->password = $password;
            } else {
                $this->errorValidate();
            }
        } else {
            $this->errorValidate();
        }
    }
}
