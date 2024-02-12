<?php
class UtilisateurDAO {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getUtilisateurParId($code) {
        $stmt = $this->db->prepare("SELECT * FROM utilisateur WHERE code = :code");
        $stmt->bindParam(":code", $code, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getUtilisateurParNomUtilisateur($nomUtilisateur) {
        $stmt = $this->db->prepare("SELECT * FROM utilisateur WHERE nom_utilisateur = :nom_utilisateur");
        $stmt->bindParam(":nom_utilisateur", $nomUtilisateur, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function ajouterUtilisateur($nom, $prenom, $email, $motDePasse, $telephone) {
        $motDePasseHash = password_hash($motDePasse, PASSWORD_DEFAULT);

        $stmt = $this->db->prepare("INSERT INTO utilisateur (nom, prenom, email, mdp, telephone) VALUES (:nom, :prenom, :email, :mot_de_passe, :telephone)");
        $stmt->bindParam(":nom", $nom, PDO::PARAM_STR);
        $stmt->bindParam(":prenom", $prenom, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":mot_de_passe", $motDePasseHash, PDO::PARAM_STR);
        $stmt->bindParam(":telephone", $telephone, PDO::PARAM_STR);

        return $stmt->execute();
    }
}
?>