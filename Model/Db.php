<?php

class Db
{

    public $db;

    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=chatbox', 'root', 'user');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    public function signUp($pseudo, $password, $sexe)
    {
        $req = $this->db->prepare("SELECT * FROM users where pseudo = (?)");
        $req->execute([$pseudo]);
        if ($req->rowCount() == 1) {
            return false;
        }

        $req = $this->db->prepare("INSERT INTO users (pseudo,password,sexe)VALUES  (?,?,?)");
        $req->execute([$pseudo, $password, $sexe]);
        return true;

    }

    public function login($pseudo, $password)
    {
        $req = $this->db->prepare("SELECT * FROM users where pseudo = (?)");
        $req->execute([$pseudo]);
        if ($req->rowCount() == 1) {
            $user = $req->fetchObject();

            if ($user->password == $password) {
                echo "login";
                session_start();
                $_SESSION["user"] = $user;
                $_SESSION["logged"] = true;
                return true;
            } else {
                echo "nooooooooooooooo";
            }
        } else {
            return false;
        }
    }

    public function logout()
    {
        $_SESSION["logged"] = false;
        session_start();
        session_unset();
        session_destroy();
        header("location:../index.php");
    }

    public function newMessage($text)
    {
        $req = $this->db->prepare("INSERT INTO messages (text,id_user)VALUES  (?,?)");
        $req->execute([$text, $_SESSION["user"]->id]);
    }

    public function getMessages()
    {
        $messages = $this->db->query("SELECT * FROM users,messages Where users.id = messages.id_user ORDER BY TIME ASC ");
        $messageArray = [];
        while ($message = $messages->fetchObject()) {
            $messageArray[] = $message;
        }

        return $messageArray;
    }
}

?>
