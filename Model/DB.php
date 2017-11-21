<?php
/**
 *
 */
class Db
{
  public function getPDO(){
    return new PDO('mysql:host=localhost;dbname=pinterest', 'root', 'user');
  }
}

 ?>
