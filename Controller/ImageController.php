<?php
require('./Model/Image.php');

class ImageController
{
  public $ImageModel;

    public function __construct()
    {
      $this->ImageModel = new Image();
    }

    public function uploadImage($image)
    {
        $this->ImageModel->insert($image);
    }

    public function getImages()
    {
      $this->ImageModel->all();
      require "../Views/acceuil.php";
    }

    // public function getImagesFromUser()
    // {
    //     $this->ImageModel->byId($image);
    // }

    public function editImage()
    {
        $this->ImageModel->update($image);
        header('location:');
    }

    public function deleteImage()
    {
        $this->ImageModel->delete($image);
        header('location:');
    }

}
