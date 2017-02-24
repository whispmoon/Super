<?php

function pre($data){
	echo '<pre>';
	var_dump($data);
	echo '</pre>';

}

function renderSuper($type){ //1 ou 2
	$liste='';
	foreach($_SESSION['supers'] as $key=>$super){

		if ($super["type"] ==$type ){

			$sup = '<a href="supprimer_super.php?id='.$key.'"><span class="glyphicon glyphicon-remove"></span></a>';

			$mod = '<a href="index.php?action=mod&id='.$key.'"><span class="glyphicon glyphicon-refresh"></span></a>';


			$liste .= '<li>'.$super["nom_scene"].' '.$super["cri_guerre"].'
			 '.$super["super_pouvoir"].'  '.$sup.'  '.$mod;

		}

	}
	
	return $liste;

}

	function messages($get){
		
		$message = "";

		if(isset($get["error"] ) ){

			if($get["error"] == 1)
				$message = '<div class = "test" style="color: red;">'."You have forget some informations !".'</div>';
			if($get["error"] ==2)
				$message = '<div  style="color: red;">'."You have forget some informations !".'</div>';
		}
	
		if(isset($get["success"])){
			if($get["success"] == 1)
			$message = '<div  style="color: green; transform: scale(1,2);">'."Your hero is saved !".'</div>';
		}
		return $message;
	}





?>