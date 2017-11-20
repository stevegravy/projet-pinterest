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
  }


$user1 = new User("kevin","somao");
$user2 = new User("Steve","somao");
var_dump($user1->returnName());
var_dump($user2->returnName());

?>
