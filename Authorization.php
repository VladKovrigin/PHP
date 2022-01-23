<?php

namespace blog\Authorization;
include "Base.php";

use blog\Base as Base;


interface AuthorizationInterface
{
    public function __construct();
}

class Authorization extends Base implements AuthorizationInterface
{
    public string $login;
    protected string $password;

    protected function validate()
    {
        $this->setBase($_POST['authorizeLogin'], $_POST['authorizePassword']);
    }

    public function __construct()
    {
        $this->validate();
        if(isset($_POST['rememberMe'])) {
            setcookie('login', $this->login);
        }
    }
}

$authorizedUser = new Authorization();
