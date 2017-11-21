<?php
include 'DB.php';

  class User{

    public $prenom;
    public $nom;

    public function __construct($p,$n){
      $this->prenom = $p;
      $this->nom = $n;
    }

    public function returnName(){
      return $this;
    }

    public function signUp($pseudo, $password){
      $req = $this->db->prepare("SELECT * FROM user where pseudo = (?)");//prépare la requete sql à exécuter stockée dans la variable $req
      $req->execute([$pseudo]);//exécute la requete sql préparée et compare le pseudo rentré avec celui stocké dans la BDD
      if ($req->rowCount() == 1) {//si le nombre de ligne affectée(s) par le dernier appel à le fonction "execute" = 1 (si le pseudo est déjà stocké dans la bdd)
        return false;//la fonction retourne "false"
      }
      $req = $this->db-> prepare("SELECT * FROM user (pseudo, password) where pseudo && pasword = (?,?)"); //
      $req->execute([$pseudo, $password]);
        return true;
    }

    public function login($pseudo, $password){
    $req = $this->db->prepare("SELECT * FROM user" where)
    }


  }


// $user1 = new User("kevin","somao");
// $user2 = new User("Steve","somao");
// var_dump($user1->returnName());
// var_dump($user2->returnName());

?>
