<?php
// CPour se connecter dans la base de donnee
try {
    $db = new PDO("mysql:host=your_host;dbname=your_database", "your_username", "your_password");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion dans la base de données" . $e->getMessage());
}

// Classe Utilisateur
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

    // Getters et setters
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

    public function getTelephone() {
        return $this->telephone;
    }
}

class UtilisateurDAO {
    private $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getUtilisateurs() {
        $stmt = $this->db->prepare("SELECT * FROM utilisateur");
        $stmt->execute();

        $utilisateurs = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $utilisateurs[] = new Utilisateur($row['code'], $row['nom'], $row['prenom'], $row['email'], $row['mdp'], $row['telephone']);
        }

        return $utilisateurs;
    }

    public function mettreAJourUtilisateur(Utilisateur $utilisateur) {
        $stmt = $this->db->prepare("UPDATE utilisateur SET nom = :nom, prenom = :prenom, email = :email, mdp = :mdp, telephone = :telephone WHERE code = :code");
        $stmt->bindParam(":nom", $utilisateur->getNom(), PDO::PARAM_STR);
        $stmt->bindParam(":prenom", $utilisateur->getPrenom(), PDO::PARAM_STR);
        $stmt->bindParam(":email", $utilisateur->getEmail(), PDO::PARAM_STR);
        $stmt->bindParam(":mdp", $utilisateur->getMdp(), PDO::PARAM_STR);
        $stmt->bindParam(":telephone", $utilisateur->getTelephone(), PDO::PARAM_STR);
        $stmt->bindParam(":code", $utilisateur->getCode(), PDO::PARAM_STR);

        return $stmt->execute();
    }
}

// pour afficher les utilisateurs
$utilisateurs = $utilisateurDAO->getUtilisateurs();

echo "<h2>Liste des Utilisateurs :</h2>";
echo "<table border='1'>";
echo "<tr><th>Code</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Mot de passe</th><th>Téléphone</th><th>Action</th></tr>";

foreach ($utilisateurs as $utilisateur) {
    echo "<tr>";
    echo "<td>{$utilisateur->getCode()}</td>";
    echo "<td>{$utilisateur->getNom()}</td>";
    echo "<td>{$utilisateur->getPrenom()}</td>";
    echo "<td>{$utilisateur->getEmail()}</td>";
    echo "<td>{$utilisateur->getMdp()}</td>";
    echo "<td>{$utilisateur->getTelephone()}</td>";
    echo "<td><a href='gestion_de_compte.php?edit={$utilisateur->getCode()}'>Modifier</a></td>";
    echo "</tr>";
}

echo "</table>";

// pour modifier les utilisateurs/comptes
if (isset($_GET['edit'])) {
    $utilisateurCode = $_GET['edit'];
    $utilisateur = $utilisateurDAO->getUtilisateurParCode($utilisateurCode);

    if ($utilisateur) {
        echo "<h2>Modifier les informations de l'utilisateur :</h2>";
        echo "<form method='post' action='gestion_de_compte.php'>";
        echo "<input type='hidden' name='utilisateur_code' value='{$utilisateur->getCode()}'>";
        echo "Nouveau Nom : <input type='text' name='nouveau_nom'><br>";
        echo "Nouveau Prénom : <input type='text' name='nouveau_prenom'><br>";
        echo "Nouveau Email : <input type='text' name='nouveau_email'><br>";
        echo "Nouveau Mot de passe : <input type='password' name='nouveau_mdp'><br>";
        echo "Nouveau Téléphone : <input type='text' name='nouveau_telephone'><br>";
        echo "<input type='submit' value='Modifier'>";
        echo "</form>";
    } else {
        echo "l'utilisateur n'existe pas";
    }
}
?>
