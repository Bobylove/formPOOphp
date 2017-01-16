<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>formPOO</title>
</head>
<h1>Form POO</h1>
<br>
<?php if (empty($_POST)) { ?>
<form action="user.php" method="post">
	<label for="genre">Genre</label>
	<select name="genre" id="genre">
		<option value="homme">Mr</option>
		<option value="femme">Mme</option>
	</select>
	<br>
	<br>
	<label for="nom">Nom</label>
	<input name="nom" id="nom" type="text">
	<br><br>
	<label for="prenom">Prenom</label>
	<input name="prenom" id="prenom" type="text">
	<br><br>	
	<label for="file">Fichier</label>
	<input name="file"  id="file" type="file">
	<br><br>
	<input type="submit" value="CLICK HERE">
</form>
<?php 
}else{
	
}
class FormInfos {
	private $_name = "";
	private $_prenom = "";
	private $_genre = "";
	private $_file = "";
	
	function __construct($_nom,$_prename,$_gender,$_fichier){

		$this->_name = $_nom;
		$this->_prenom = $_prename;
		$this->_genre = $_gender;
		$this->_file = $_fichier;

	}
	public function setGenre(){
		return $this->_genre;
	}

	public function setPrenom(){
		return  $this->_prenom;
	}
	public function setName(){
		return $this->_name;

	}
	public function setFile(){
		return $this->_file;
	}
}

?>