<?php
include_once('../modele/DAO/userDAO.class.php');
include_once('../modele/DAO/connexionBD.class.php');

class UserController {
    private $userDAO;

    public function __construct() {
        $this->userDAO = new UtilisateurDAO(ConnexionBD::getInstance());
    }

 
    public function inscrire(Utilisateur $utilisateur): bool {
        try {
            return $this->userDAO->ajouterUtilisateur(
                $utilisateur->getNom(),
                $utilisateur->getPrenom(),
                $utilisateur->getEmail(),
                $utilisateur->getMdp(),
                $utilisateur->getTelephone()
            );
        } catch (Exception $e) {
            $this->errorMessage = $e->getMessage();
            return false;
        }
    }

    public function getErrorMessage() {
        return $this->errorMessage;
    }
    public function connecter($email, $motDePasse) {
        $utilisateur = $this->userDAO->getUtilisateurParEmail($email);
        if ($utilisateur && password_verify($motDePasse, $utilisateur['mdp'])) {

            return true;
        }
        return false;
    }

    public function getInformationsUtilisateur($code) {
        return $this->userDAO->getUtilisateurParId($code);
    }


}

?>