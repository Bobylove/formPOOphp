<?php 
require "index.php";

$newInfos = new FormInfos($_POST["nom"],$_POST["prenom"],$_POST["genre"],$_POST["file"]);
echo "Genre : " .  $newInfos->setGenre() . "<br>";
echo "prenom :  " . $newInfos->setPrenom() . "<br>" ;
echo "nom :  " . $newInfos->setName() ."<br>" ;
echo "Fichier :  " . $newInfos->setFile();
?>