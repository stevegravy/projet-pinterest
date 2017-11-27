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
        $imagePath = "{$title}.jpg";

        $img = $this->manager->make($_FILES['image']['tmp_name']);
        $img->save($imagePath);

        //$image = $this->dataToObject([$title, $description, $imagePath]);
        //$this->ImageModel->insert($image);

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

    // public function getImagesFromUser()
    // {
    //     $this->ImageModel->byId($image);
    // }

    public function editImage($image)
    {
        $this->ImageModel->update($image);
        header('location:');
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
