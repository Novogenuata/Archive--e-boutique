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
        $stmt = $this->db->prepare("SELECT * FROM utilisateur WHERE email = :nom_utilisateur");
        $stmt->bindParam(":nom_utilisateur", $nomUtilisateur, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function ajouterUtilisateur($nom, $prenom, $email, $motDePasse, $telephone) {
        try {
            $motDePasseHash = password_hash($motDePasse, PASSWORD_DEFAULT);
    
            $code = uniqid();
    
            $stmt = $this->db->prepare("INSERT INTO utilisateur (code, nom, prenom, email, mdp, telephone) VALUES (:code, :nom, :prenom, :email, :mdp, :telephone)");
            $stmt->bindParam(":code", $code, PDO::PARAM_STR);
            $stmt->bindParam(":nom", $nom, PDO::PARAM_STR);
            $stmt->bindParam(":prenom", $prenom, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":mdp", $motDePasseHash, PDO::PARAM_STR);
            $stmt->bindParam(":telephone", $telephone, PDO::PARAM_STR);
    
            if (!$stmt->execute()) {
                throw new Exception("Erreur lors de l'ajout de l'utilisateur dans la base de donnÃ©es: " . implode(", ", $stmt->errorInfo()));
            }
    
            return true;
        } catch (Exception $e) {
            throw $e;
        }
    }
    public function getUtilisateurParEmail($email) {
        $stmt = $this->db->prepare("SELECT * FROM utilisateur WHERE email = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

}
?>