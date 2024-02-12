<?php 

// classe Commande

class Commande {
	// Attributs
	private $numero_commande;
	private $date_commande;
	private $total;


	// Constructeur
	public function __construct($numero_commande, $date_commande, $total){
		$this->numero_commande=$numero_commande;
		$this->date_commande=$date_commande;
		$this->total=$total;
		
	}
	
	// Accesseurs et mutateurs
         // Accesseurs (Getters)

    public function getNumero_commande() {
        return $this->numero_commande;
    }

    public function getDate_commande() {
        return $this->date_commande;
    }

    public function getTotal() {
        return $this->total;
    }
	    // Setters
        public function setNumero_commande($numero_commande) {
            $this->numero_commande = $numero_commande;
        }
    
        public function setDate_commande($date_commande) {
            $this->date_commande = $date_commande;
        }
    
        public function setTotal($total) {
            $this->total = $total;
        }

	
	// Autres méthodes

    public function calculerTaxe($tauxTaxe) {
        $taxe = $this->total * ($tauxTaxe / 100);
        return $taxe;
    }

    public function appliquerRemise($pourcentageRemise) {
        $remise = $this->total * ($pourcentageRemise / 100);
        $this->total -= $remise;
    }


    public function getDetails() {
        return "Commande #{$this->numero_commande} - Total: $" . round($this->total, 2);
    }
	// Affichage
	public function __toString(){
		$message="[#".$this->numero_commande."] ";
		$message.=" @".round($this->total,2)."$ (".$this->date_commande.")";
		return $message;
	}
}
?>











