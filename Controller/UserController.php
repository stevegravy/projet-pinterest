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
            unset ($_SESSION['erreur']);
        } else {
            $_SESSION['erreur'] = 1;
            header('location: index.php?action=login');
        }
    }

    public function LogoutUser()
    {
        session_destroy();
        header('location: index.php');
    }

    public function SignUpUser($pseudo, $password)
    {
        $longueur = strlen($password);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        if (!$uppercase || !$lowercase || !$number || $longueur < 8) {
            echo "Le mot de passe doit contenir au moins 8 caractères avec une majuscule, une minuscule et un chiffre";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            if ($this->usermodel->Signup($pseudo, $hashed_password)) {
                header('location: index.php?action=accueil');
            } else {
                $_SESSION ['erreur'] = "Le mot de passe ou le pseudo n'est pas valide, essayez encore...";
                header('location: index.php?action=accueil');
            }
        }
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        if ($this->usermodel->Signup($pseudo, $hashed_password)) {
            header('location: index.php?action=accueil');
        } else {
            $_SESSION ['erreur'] = "Le mot de passe ou le pseudo n'est pas valide, essayez encore...";
            header('location: index.php?action=signup');
        }
    }
}
