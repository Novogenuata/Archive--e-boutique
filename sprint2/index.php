<?php
    // *****************************************************************************************
	// Description : Contrôleur frontal du site
	// Date        : 27 novembre 2021
	// Auteur      : Dini Ahamada
    // *****************************************************************************************
	//Le contrôleur frontal reçoit la requête avec un paramètre lui indiquant l’action à accomplir. 	
	//Inclusion de la manufacture de controleur (qui importe déjà tous les contrôleur)
	include_once "controleurs/controleurManufacture.class.php";
	
	//Obtenir le bon controleur
	//Si la requête contenant le paramètre action n'est pas renseigne
	if (!isset($_GET['action'])) {
		// on reste à la page d'accueil
		$action="";
	} else {
		$action=$_GET['action'];
	}
		


		// Sinon on recupere l’action indiqué à accomplir
	

	
   
	

//Creer une instance du contrôleur adapté 
	$controleur = Manufacture::creerControleur($action);
//qui contient maintenant des données qui peuvent être utilisées par la vue.
	$nomVue = $controleur->executeAction();

	echo "La vue retournée : " . $nomVue;
	
	// Executer l'action et obtenir le nom de la vue
  
	
	// inclure la bonne vue
	include_once("vues/". $nomVue . ".php");
