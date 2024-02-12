<?php
class Utilisateur {
    private $code;
    private $nom;
    private $prenom;
    private $email;
    private $mdp; 
    private $telephone;

    public function __construct($code, $nom, $prenom, $email, $mdp, $telephone) {
        $this->code = $code;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->telephone = $telephone;
    }

    public function getCode() {
        return $this->code;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getMdp() {
        return $this->mdp;
    }

    public function setMdp($mdp) {
        $this->mdp = password_hash($mdp, PASSWORD_DEFAULT);
    }

    public function getTelephone() {
        return $this->telephone;
    }
}
?>