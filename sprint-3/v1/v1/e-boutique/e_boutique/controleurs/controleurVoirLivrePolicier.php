<?php


//	include_once("modele/DAO/infoAccessoireDAO.class.php");
    include_once("controleurs/controleur.abstract.class.php");
    include_once("modele/DAO/livreDAO.class.php");
	
	class VoirLivrePolicier extends Controleur {
	
		private $tabLivresPolicier=[];
	
		public function __construct() {
			parent::__construct();
			
		}
	
		public function getTabLivres(){
			return $this->tabLivresPolicier;
		}

		public function executeAction() {
			$bookNumbers = ["001", "002", "003", "004", "005", "006", "007", "008", "009", "010"];
			
			foreach ($bookNumbers as $bookNumber){
				$livre = LivreDAO::chercher($bookNumber);
				if ($livre != null){
					$this->tabLivresPolicier[] = $livre;
				}
			};

			$this->tabLivresPolicier = LivreDAO::chercherTous();
			
			return "accueil_v2";
		
		}
      



		
	}	
	
?>