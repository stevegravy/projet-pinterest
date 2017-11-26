<?php

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

}
