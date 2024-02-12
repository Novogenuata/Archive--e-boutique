<?php
    include_once("controleurs/controleur.abstract.class.php");
    include_once("modele/DAO/livreDAO.class.php");

    class VoirUnLivre extends Controleur {
        private $livre2;
        public function __construct() {
            parent::__construct();
        }

        public function getLivre() {
            return $this->livre2;
        }

        public function executeAction() {
            if(isset($_GET['numero'])){
                $numero2 = $_GET['numero'];
                $this->livre2 = LivreDAO::chercher($numero2);
                if($this->livre2 != null){
                    return "livre_v2";
                }
                else {
                    $this->messagesErreur[] = "Livre introuvable";
                    return "erreur";
                }
            }
            else {
                $this->messagesErreur[] = "Numéro de livre non spécifié";
                return "erreur";
            }
        }
    }
?>