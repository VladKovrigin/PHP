<?php

namespace blog\Registration;
include "Base.php";

use blog\Base as Base;


interface RegistrationInterface
{
    public function __construct();
}

class Registration extends Base implements RegistrationInterface {

    public string $login;
    protected string $password;
    public string $email;
    public string $avatarFileName;

    public function __construct()
    {
        $this->setBase($_POST['registrationLogin'], $_POST['registrationPassword']);

        $filename = $_FILES['avatar']['name'];
        move_uploaded_file($_FILES['avatar']['tmp_name'], dirname(__FILE__) . '/img/' . $filename);
        $typeFile = explode('/', $_FILES['avatar']['type']);

        if(filter_var($_POST['registrationEmail'], FILTER_VALIDATE_EMAIL) && $typeFile[0] === 'image') {
            $this->email = $_POST['registrationEmail'];
            $this->avatarFileName = 'img/' . $filename;
        }
    }
}


$newUser = new Registration();
