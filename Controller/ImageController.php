<?php

use Intervention\Image\ImageManager;

class ImageController
{
    public $ImageModel;
    public $manager;

    public function __construct()
    {
        $this->ImageModel = new Image();
        $this->manager = new ImageManager(array('driver' => 'gd'));

    }

    public function uploadImage()
    {
        $title = $_POST['title'];
        $description = $_POST['description'];

        $title = trim($title);
        if ((isset($title) && isset($description)) && ($title == "" || $description == "")){
          return $error1;
        }

        if (strlen($title) >= 35){
          return $error2;
        }

        if (strlen($description) >= 140){
          return $error3;
        }

        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$title)){
          return $error4;
        }

        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$description)){
          return $error5;
        }

        if (isset($_FILES['image'])) {
            $errors = array();
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));
            /* $file_name = $_FILES['image']['name'];
             $file_type = $_FILES['image']['type'];
             $file_size = $_FILES['image']['size'];*/

            $fileExtension = array("jpeg", "jpg", "png", "webp");

            if (in_array($file_ext, $fileExtension) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
                header("location:index.php?action=form");
            }
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "public/images/" . $title . "." . $file_ext);
                $imagePath = "public/images/" . $title . "." . $file_ext;
                $image = $this->dataToObject([$title, $description, $imagePath]);
                $this->ImageModel->insert($image);
            } else {
                print_r($errors);
            }
        }
        header("location:index.php?action=accueil");
    }

    public function getImages()
    {
        $images = $this->ImageModel->all();
        require "./Views/accueil.php";
    }

    public function getAdminPage()
    {
        $images = $this->ImageModel->all();
        require "./Views/admin.php";
    }

    public function getAdminEditPage()
    {
        require './Views/adminEdit.php';
    }


    public function editImage()
    {

        $title = $_POST['titre'];
        $description = $_POST['description'];
        $id = $_POST['id'];

        $image = $this->dataToObject([$title, $description, ""]);
        $image->id = $id;

        if ($this->ImageModel->update($image)) {
            header('location:index.php?action=admin');
        }
    }

    public function deleteImage()
    {
        $deleteId = $_POST['id'];
        $this->ImageModel->delete($deleteId);
        header('location:index.php?action=admin');
    }

    private function dataToObject($array)
    {
        $imageObject = new stdClass();
        $imageObject->title = $array[0];
        $imageObject->description = $array[1];
        $imageObject->chemin = $array[2];
        return $imageObject;
    }
}


// public function getImagesFromUser()
// {
//     $this->ImageModel->byId($image);
// }
