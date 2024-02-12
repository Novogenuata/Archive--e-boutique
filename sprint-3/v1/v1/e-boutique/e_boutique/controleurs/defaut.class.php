<?php
	include_once("controleurs/controleur.abstract.class.php");

	class Defaut extends Controleur {
		
		
		public function __construct() {
			parent::__construct();
		}
		
		
		public function executeAction() {
			return "accueil_v2";
		}


		
	}	
	
?>