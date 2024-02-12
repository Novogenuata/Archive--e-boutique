<?php
class CartDAO implements DAO{
    private static $lastOrderNumber = 0;
    static public function chercher($cles){

    }
    
    static public function chercherTous(){

    }
    
    static public function chercherAvecFiltre($filtre){

    } 
    
    
    static public function modifier($unObjet){

    }
    
    static public function supprimer($unObjet){
        
    }

    public static function inserer($total) {

        

        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter à la BD.");
        }

        
        $connexion->beginTransaction();

        try {
             
            self::$lastOrderNumber += 1;
            $numeroCommande = self::$lastOrderNumber;

            $requete = $connexion->prepare("INSERT INTO commande (numero_commande, code, date_commande, total) VALUES (?, NULL, NOW(), ?)");
            $requete->execute([$numeroCommande, $total]);

            foreach ($_SESSION['cart'] as $bookNum => $quantity) {
                $requete = $connexion->prepare("INSERT INTO commande_livres (numero_commande, numero) VALUES (?, ?)");
                $requete->execute([$numeroCommande, $bookNum]);
            }

            
            $connexion->commit();
            return true;
        } catch (Exception $e) {
            
            $connexion->rollback();
            throw $e;
        }
    }
}
