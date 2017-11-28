<?php
require_once './Model/User.php';

class UserController
{

    public $usermodel;

    public function __construct()
    {
        $this->usermodel = new User();
    }

    public function GetLoginPage()
    {
        require_once './Views/login.php';
    }

    public function Form()
    {
        require_once './Views/form.php';
    }

    public function SignUp()
    {
        require_once './Views/signup.php';
    }

    public function LoginUser($pseudo, $password)
    {
        if ($this->usermodel->login($pseudo, $password)) {
            header('location: index.php?action=accueil');
        } else {
            header('location: index.php?action=getsignuppage');
        }
    }

    public function LogoutUser()
    {
        session_destroy();
        header('location: index.php');
    }

    public function SignUpUser($pseudo, $password)
    {
        if ($this->usermodel->Signup($pseudo, $password)) {
            header('location: index.php?action=form');
        } else {
            header('location: index.php?action=login');
        }
    }
}


?>
