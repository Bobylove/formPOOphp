<?php 
require "index.php";

$newInfos = new FormInfos();
echo $newInfos->setPrenom();
echo  $newInfos->setName();
?>