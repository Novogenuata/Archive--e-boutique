<?php

    
	include_once "controleurs/manufactureControleur.php";
	
	session_start();
	
	if (!isset($_GET['action'])) {
		
		$action="";
	} else {
		$action=$_GET['action'];
	}
		
	$controleur = Manufacture::creerControleur($action);

	$nomVue = $controleur->executeAction();


	if (method_exists($controleur, 'getLivre')) {
		$livre2 = $controleur->getLivre();
	}


	
	include_once("vues/". $nomVue . ".php");
?>