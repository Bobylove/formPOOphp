<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>formPOO</title>
</head>
<h1>form</h1>
<br>
<form action="user.php" method="post">
	<label for="nom">Nom</label>
	<input name="nom" id="nom" type="text">
	<br>
	<label for="prenom">Prenom</label>
	<input name="prenom" id="prenom" type="text">
	<br>	
	<input type="submit" value="CLICK HERE">
</form>
<?php 
class FormInfos {
	private $_name = "";
	private $_prenom = "";
	

	public function __construct($arg){
		return $this->_name.$this->_prenom = $arg;
	}

	public function setPrenom(){
		$this->_prenom = $_POST["prenom"];
		return  $this->_prenom;
	}
	public function setName(){
		$this->_nom = $_POST["nom"];
		return $this->_nom;

	}
}

?>