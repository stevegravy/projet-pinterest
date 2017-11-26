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
        $success = $req->execute([$image->chemin, $image->title, $image->description, $image->user_id]);

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

    public function delete($image)
    {
        $req = $this->db->prepare("delete from user where id=(?)");
        $req->execute([$image->id]);
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

/*
$image = new Image();
print_r($image->all());
$obj = new stdClass();
$obj->id = "1";
$obj->chemin = "public\images\lol.jpg";
$obj->title = "mon titre update";
$obj->description = "ma desc update 2";
$obj->user_id = 1;

$image->all();

print_r($image->byId($obj));
$image->update($obj);*/
