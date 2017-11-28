<?php

class Image
{

    public $db;

    public function __construct()
    {
        $this->db = DB::getPDO();
    }

    public function insert($image)
    {
        $req = $this->db->prepare("insert into image (chemin,titre,description,user_id) values (?,?,?,?)");
        $success = $req->execute([$image->chemin, $image->title, $image->description, $_SESSION['id']]);

        if ($success) {
            return true;
        } else {
            return false;
        }
    }

    public function update($image)
    {
        $req = $this->db->prepare("update image set titre = (?),description = (?) where id=(?)");
        $req->execute([$image->title, $image->description, $image->id]);

        if ($req->rowCount()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($deleteId)
    {
        $req = $this->db->prepare("delete from image where id=(?)");
        $req->execute([$deleteId]);
    }

    public function byId($image)
    {
        $req = $this->db->prepare("select * from image where id=(?)");
        $req->execute([$image->id]);
        $imageObject = $req->fetchObject();
        return $imageObject;
    }

    public function all()
    {
        $req = $this->db->query("select * from image");
        $imagesArray = $req->fetchAll(PDO::FETCH_OBJ);
        return $imagesArray;
    }
}
