<?php


//	include_once("modele/DAO/infoAccessoireDAO.class.php");
    include_once("controleurs/controleur.abstract.class.php");
    include_once("../modele/DAO/livreDAO.class.php");

	class VoirLivre extends Controleur {
	
		private $tabLivres;
	
		public function __construct() {
			parent::__construct();
			$this->tabLivres=array();
		}
	
		public function getTabLivres(){
			return $this->tabLivres;
		}

		public function executeAction() {
			
			$this->tabLivres = LivreDAO::chercherTous();
			//retourner la pageVoirProduits

			return "pageVoirProduits";
		
		}
      



		
	}	
	
?>