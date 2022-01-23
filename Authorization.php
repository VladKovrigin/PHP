<?php

namespace blog\Authorization;
include "Base.php";

use blog\Base as Base;


interface AuthorizationInterface
{
    public function setBase($login, $password);
}

class Authorization extends Base implements AuthorizationInterface
{
    public string $login;
    protected string $password;
    public function __construct()
    {
        $this->setBase($_POST['authorizeLogin'], $_POST['authorizePassword']);
        setcookie('login', $this->login);
    }
}

$authorizedUser = new Authorization();
