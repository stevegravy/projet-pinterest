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
        $req = $this->db->prepare("SELECT * FROM public.user where pseudo = (?)");//prépare la requete sql à exécuter stockée dans la variable $req
        $req->execute([$pseudo]);//exécute la requete sql préparée et compare le pseudo rentré avec celui stocké dans la BDD
        if ($req->rowCount() == 1) {//si le nombre de ligne affectée(s) par le dernier appel à le fonction "execute" = 1 (si le pseudo est déjà stocké dans la bdd)
            return false;//la fonction retourne "false"
        }
        $req = $this->db->prepare("INSERT INTO public.user (pseudo,password) VALUES (?,?)"); //
        $req->execute([$pseudo, $password]);
        return true;
    }


    public function login($pseudo, $password)
    {
        $req = $this->db->prepare("SELECT * FROM public.user where pseudo = (?)");
        $req->execute([$pseudo]);
        $user_data = $req->fetch();
        if (password_verify($password, $user_data['password'])) {
            if ($req->rowCount() == 1) {
                $_SESSION ['login'] = true;
                $_SESSION ['id'] = $user_data['id'];
                $_SESSION ['pseudo'] = $user_data['pseudo'];
                $_SESSION ['role'] = $user_data['role'];
                return true;
            } else {
                return false;
            }
        }
    }
}


?>
