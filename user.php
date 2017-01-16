<?php 
require "index.php";

$newInfos = new FormInfos($_POST["nom"],$_POST["prenom"],$_POST["genre"]);
echo "Genre : " .  $newInfos->setGenre() . "<br>";
echo "prenom :  " . $newInfos->setPrenom() . "<br>" ;
echo "nom :  " . $newInfos->setName() ;
?>