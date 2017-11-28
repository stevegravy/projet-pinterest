<?php
require 'core.php';
require 'Model/DB.php';
require 'vendor/autoload.php';

DB::connect($config);
session_start();

include('./Model/Image.php');
include('./Controller/UserController.php');
include('./Controller/ImageController.php');


?>