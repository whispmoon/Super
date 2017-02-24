<?php
session_start();

if (isset($_POST) AND !empty($_POST)) {
  

	if(!empty($_POST["id"]) AND !empty($_POST["type"]) AND !empty($_POST["nom_scene"])AND !empty($_POST["cri_guerre"])AND !empty($_POST["super_pouvoir"])){
		

		if ($_POST["id"]  == -1) { //je suis en ajout
		$_SESSION['supers'] [] = [
								  "type"=>$_POST["type"], 
								  "nom_scene"=>$_POST["nom_scene"], 
								  "cri_guerre"=>$_POST["cri_guerre"], 
								  "super_pouvoir"=>$_POST["super_pouvoir"]
								 ];
			header('Location: index.php?success=1');					 
		}
		
		if ($_POST["id"]  >= 0) { //je suis en modif
		$_SESSION['supers'] [$_POST["id"]] = [
								  "type"=>$_POST["type"], 
								  "nom_scene"=>$_POST["nom_scene"], 
								  "cri_guerre"=>$_POST["cri_guerre"], 
								  "super_pouvoir"=>$_POST["super_pouvoir"]
								 ];
			header('Location: index.php?success=2');
		}


	}
	else{
		

		header('Location: index.php?error=2');

	}


} 
	else {
	header('Location: index.php?error=1');
}


?>