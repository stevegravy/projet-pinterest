<?php
try
{
    // On se connecte à MySQL
    $pdo = new PDO('pgsql:host=ec2-54-75-233-162.eu-west-1.compute.amazonaws.com;dbname=dbhsq99nin71j4;', 'qskuutieobucyy', '239ef28ac3cbefc171b72c2d5a9c3777d544fb43b96615097a9b3e969bf33a28');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$query = 'INSERT INTO categories (nom, description) VALUES (?, ?);';
$prep = $pdo->prepare($query);
 
$prep->bindValue(1, 'bertand', PDO::PARAM_STR);
$prep->bindValue(2, 'ceci est un test pour desc', PDO::PARAM_STR);
$prep->execute();
$resultat = $pdo->query('SELECT * FROM categories');
while ($donnees = $resultat->fetch())
{
  echo '<br/>';
  echo $donnees['nom'];
  echo ' : ';
  echo $donnees['description'];
}
?>
