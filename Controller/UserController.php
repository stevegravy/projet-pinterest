<?php
require_once './Model/User.php';

class UserController {


  public function GetLoginPage(){
    require_once './Views/login.php';
  }

  	public function Form(){
        require_once './Views/form.php';
  	}

    public function SignUp(){
  	    require_once './Views/signup.php';
    }

    public function LoginUser($pseudo, $password){
        $usermodel = new User;
        if ($usermodel->login($pseudo, $password)) {
            header('location: index.php?action=form');
        }else{
            header('location: index.php?action=login');
        }
    }

    public function SignUpUser($pseudo, $password){
        $signup = new user;
        if ($signup->Signup($pseudo, $password)){
            header('location: index.php?action=form');
        }else{
            header('location: index.php?action=login');
        }
    }
}



?>
