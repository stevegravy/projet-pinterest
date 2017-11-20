<?php
/**
 *
 */
class Db
{

  function __construct()
  {
    return new PDO('mysql:host=localhost;dbname=chatbox', 'root', 'user');
  }
}

 ?>
