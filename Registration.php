<?php

namespace blog\Registration;
include "Base.php";

use blog\Base as Base;


interface RegistrationInterface
{
    public function __construct();
    public function checkImage();
    public function checkEmail();
}

class Registration extends Base implements RegistrationInterface {

    public string $login;
    protected string $password;
    public string $email;
    public string $avatarFileName;

    public function checkImage()
    {
        $filename = $_FILES['avatar']['name'];
        move_uploaded_file($_FILES['avatar']['tmp_name'], dirname(__FILE__) . '/img/' . $filename);

        $typeFile = explode('/', $_FILES['avatar']['type']);
        if($typeFile[0] === 'image') {
            $this->avatarFileName =  '/img/' . $filename;
            return true;
        }
        $this->errorValidate();
    }

    public function checkEmail()
    {
        if (filter_var($_POST['registrationEmail'], FILTER_VALIDATE_EMAIL)) {
            $this->email = $_POST['registrationEmail'];
            return true;
        }
        $this->errorValidate();
    }

    protected function validate()
    {
        $this->setBase($_POST['registrationLogin'], $_POST['registrationPassword']);
        $this->checkImage();
        $this->checkEmail();
    }

    public function __construct()
    {
        $this->validate();
    }
}


$newUser = new Registration();
