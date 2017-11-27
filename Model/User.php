<?php

class User
{
    public $db;

    public function __construct()
    {
        $this->db = DB::getPDO();
    }


    public function signUp($pseudo, $password)
    {
        $req = $this->db->prepare("SELECT * FROM user where pseudo = (?)");//prépare la requete sql à exécuter stockée dans la variable $req
        $req->execute([$pseudo]);//exécute la requete sql préparée et compare le pseudo rentré avec celui stocké dans la BDD
        if ($req->rowCount() == 1) {//si le nombre de ligne affectée(s) par le dernier appel à le fonction "execute" = 1 (si le pseudo est déjà stocké dans la bdd)
            return false;//la fonction retourne "false"
        }
        $req = $this->db->prepare("INSERT INTO user (pseudo,password) VALUES (?,?)"); //
        $req->execute([$pseudo, $password]);
        return true;
    }


    public function login($pseudo, $password)
    {
        $req = $this->db->prepare("SELECT * FROM user where pseudo = (?) && password = (?)");
        $req->execute([$pseudo, $password]);
        $user_data = $req->fetch();
        if ($req->rowCount() == 1) {
            $_SESSION ['login'] = true;
            $_SESSION ['id'] = $user_data['id'];
            $_SESSION ['pseudo'] = $user_data['pseudo'];
            $_SESSION ['password'] = $user_data['password'];
            return true;
        } else {
            return false;
        }
    }
}


?>
