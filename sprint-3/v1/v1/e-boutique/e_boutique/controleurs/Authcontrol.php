<?php

require_once '../modele/AuthAdmin.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new AdminAuth();
    }

    public function login($username, $password) {
        if ($this->userModel->validateCredentials($username, $password)) {
            session_start();
            $_SESSION["username"] = $username;
            header("Location: admin.php");
            exit();
        } else {
            $error = "Erreur";
            require_once '../vues/connexion.php';
        }
    }
}
?>
