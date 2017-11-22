<?php
require '../vendor/autoload.php';

use Intervention\Image\ImageManager;

$manager = new ImageManager(array('driver' => 'gd'));
extract($_POST);
extract($_FILES);

$img = $manager->make($_FILES['image']['tmp_name']);
$img->fit(300, 200);
$img->save("../public/images/{$title}.jpg");
