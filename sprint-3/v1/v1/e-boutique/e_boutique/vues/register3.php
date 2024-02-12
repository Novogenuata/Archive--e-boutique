<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="jquery/jquery-3.5.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-rows: auto;
            height: 100vh;
        }

        #header_global_cn_cr {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .bodyInBody_cn_cr {
            background-color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .bodyInBody_cn_cr h2 {
            text-align: center;
            font-weight: bold;
            color: #333;
        }

        .bodyInBody_cn_cr form {
            display: flex;
            flex-direction: column;
            width: 300px;
            margin: 0 auto;
        }

        .bodyInBody_cn_cr input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        .bodyInBody_cn_cr button {
            padding: 15px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body id="body_global_cn_cr">
    <header id="header_global_cn_cr">
        <div class="entete_cn_cr">
            <div>
                <img src="../images/logo.png" alt="Image du logo">
            </div>
            <div class="titre_cn_cr">
                <h1>Boutique Livre Passion</h1>
            </div>
            <div class="hide">

            </div>
        </div>
    </header>
    <div class="bodyInBody_cn_cr">
        <div>
            <h2>Création de compte</h2>
        </div>

        <div>
        
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
 
    require_once '../controleurs/controleur.user.php';
    require_once '../modele/user.class.php';
 
    $userController = new UserController();
    $errors = [];
 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = $_POST["nomFamilleUser"] ?? '';
        $prenom = $_POST["prenomUser"] ?? '';
        $email = $_POST["entreCourriel"] ?? '';
        $password = $_POST["motDePasse"] ?? '';
        $confirmPassword = $_POST["confirmationPwd"] ?? '';
        $acceptTerms = isset($_POST["accepter"]);
    
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "L'adresse e-mail doit contenir un '@'.";
        }
    
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        if (!$uppercase || !$lowercase || strlen($password) < 6) {
            $errors[] = "Le mot de passe doit contenir au moins 6 caractères, dont une majuscule et une minuscule.";
        }
    
        if ($password !== $confirmPassword) {
            $errors[] = "Les mots de passe ne correspondent pas.";
        }
    
        if (!$acceptTerms) {
            $errors[] = "Vous devez accepter les termes et conditions.";
        }
    
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    
        if (empty($errors)) {
            $newUser = new Utilisateur(null, $nom, $prenom, $email, $password, null);
            $registrationResult = $userController->inscrire($newUser);
    
            if ($registrationResult) {
                echo "Inscription réussie. Vous pouvez maintenant vous connecter! Bienvenue à Livre Passion";
            } else {
                echo "Une erreur s'est produite lors de l'inscription. " . $userController->getErrorMessage();
            }
        }
    }
    ?>
        </div>
        <div>
            <form method="post">
                <div><input placeholder="Votre nom de famille" type="text" name="nomFamilleUser" id="nom"></div> 
                <div><input placeholder="Votre prénom" type="text" name="prenomUser" id="prenom"></div>
                <div><input placeholder="Votre nom d'utilisateur" type="text" name="entreeUtilisateur" id="utilisateur"></div>
                <div><input placeholder="Votre addresse courriel" type="text" name="entreCourriel" id="courriel"></div>
                <div><input placeholder="Votre mot de passe" type="password" name="motDePasse" id="mdp"></div>
                <div><input placeholder="Confirmation" type="password" name="confirmationPwd" id="pdw"></div>
                <div><input type="checkbox" name="accepter" id="terms"> <label for="accepter">Accepter les <a href="https://www.google.ca/" target="_blank">termes et conditions d'utilisation</a></label></div>
                <div><button type="submit" class="btn btn-outline-light" name="registerBtn">Créer un compte</button></div>
            </form>
        </div>
    </div>
    

    <footer>
        <div id="containerFooter_cn_cr">
            <div><img src="../images/logo.png" alt="image du logo"></div>
            <div class="date_cn_cr">2023-2023</div>
            <div class="aide_cn_cr"><a href="FAQ.php">Besoin d'aide?</a></div>
        </div>
    </footer>
</body>
</html>
