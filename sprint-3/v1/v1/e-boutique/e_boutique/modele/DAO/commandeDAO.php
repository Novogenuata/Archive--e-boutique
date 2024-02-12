<?php

include_once("DAO.interface.php");
include_once("../modele/commande.class.php");

class CommandeDAO implements DAO
{
    public static function chercher($cles)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter à la BD");
        }

        $uneCommande = null;

        $requete = $connexion->prepare("SELECT * FROM commande WHERE numero_commande=?");

        $requete->execute(array($cles));

        if ($requete->rowCount() != 0) {
            $enr = $requete->fetch();
            $uneCommande = new Commande($enr['numero_commande'], $enr['date_commande'], $enr['total']);
        }

        $requete->closeCursor();

        ConnexionBD::close();

        return $uneCommande;
    }

    static public function chercherTous()
    {
        return self::chercherAvecFiltre("");
    }

    static public function chercherAvecFiltre($filtre)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter à la BD");
        }

        $tableau = [];

        $requete = $connexion->prepare("SELECT * FROM commande " . $filtre);

        $requete->execute();
        foreach ($requete as $enr) {
            $uneCommande = new Commande($enr['numero_commande'], $enr['date_commande'], $enr['total']);

            array_push($tableau, $uneCommande);
        }

        $requete->closeCursor();

        ConnexionBD::close();

        return $tableau;
    }

    static function inserer($uneCommande)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter à la BD.");
        }

        $requete = $connexion->prepare("INSERT INTO commande (numero_commande, date_commande, total) VALUES(?,?,?)");

        $tableauInfos = [$uneCommande->getNumeroCommande(), $uneCommande->getDateCommande(), $uneCommande->getTotal()];
        return $requete->execute($tableauInfos);
    }

    static public function modifier($uneCommande)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter à la BD.");
        }

        $requete = $connexion->prepare("UPDATE commande SET date_commande=?, total=? WHERE numero_commande=?");

        $tableauInfos = [$uneCommande->getDateCommande(), $uneCommande->getTotal(), $uneCommande->getNumeroCommande()];
        return $requete->execute($tableauInfos);
    }

    static public function supprimer($uneCommande)
    {
        try {
            $connexion = ConnexionBD::getInstance();
        } catch (Exception $e) {
            throw new Exception("Impossible de se connecter à la BD.");
        }

        $requete = $connexion->prepare("DELETE FROM commande WHERE numero_commande=?");

        $tableauInfos = [$uneCommande->getNumeroCommande()];
        return $requete->execute($tableauInfos);
    }
}
?>
