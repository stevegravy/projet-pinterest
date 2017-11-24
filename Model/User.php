<?php
include 'DB.php';

class User
{
    public $db;

    public function __construct($pdo)
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
        $req = $this->db->prepare("INSERT INTO user (password, pseudo) VALUES (?,?)"); //
        $req->execute([$pseudo, $password]);
        return true;
    }


    public function login($pseudo, $password)
    {
        $req = $this->db->prepare("SELECT * FROM user where pseudo = (?)");
        $req->execute([$pseudo]);
        $user_data = $req->fetch();

        if ($req->rowCount() > 0) {
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

$pdo = new DB();
$pdo = $pdo->getPDO();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$resultat = new User($pdo);
$resultat->login('poulette', 'lovelace');
echo $_SESSION['pseudo'];
// $user1 = new User("kevin","somao");
// $user2 = new User("Steve","somao");
// var_dump($user1->returnName());
// var_dump($user2->returnName());

?>
