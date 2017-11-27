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
        $imagePath = "public/images/{$title}.jpg";


        if (isset($_FILES['image'])) {
            $errors = array();
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $file_type = $_FILES['image']['type'];
            $file_ext = strtolower(end(explode('.', $_FILES['image']['name'])));

            $expensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $expensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "public/images/" . $title . "." . $file_ext);
                $image = $this->dataToObject([$title, $description, $imagePath]);
                $this->ImageModel->insert($image);
                echo "Success";
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

    // public function getImagesFromUser()
    // {
    //     $this->ImageModel->byId($image);
    // }

    public function editImage($image)
    {
        $this->ImageModel->update($image);
        header('location:');
    }

    public function deleteImage($image)
    {
        $this->ImageModel->delete($image);
        header('location:');
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
