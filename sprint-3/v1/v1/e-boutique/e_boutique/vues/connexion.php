<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" style="text/css" href="../bootstrap/css/bootstrap.css">
    <script src="../jquery/jquery-3.5.0.min.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
    <style>
        
    </style>
</head>
<body id="body_global_cn_cr">
 
    <header id="header_global_cn_cr">
    <a href="accueil_v2.php"><div>
                <img src="../images/logo.png" alt="logo">
            </div></a>
    </header>
    <div class="bodyInBody_cn_cr">
        <div><h2>Connexion</h2></div>
        <div>
            <?php
            require_once('../controleurs/AuthControl.php');
            $authController = new AuthController();
         
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = isset($_POST["entreeUtilisateur"]) ? $_POST["entreeUtilisateur"] : "";
                $password = isset($_POST["motDePasse"]) ? $_POST["motDePasse"] : "";

              
                $authController->login($username, $password);
            }
            ?>
            <form method="post">
                <div><label for="utilisateur">Nom d'utilisateur:</label> <br>
                    <input type="text" name="entreeUtilisateur" id="utilisateur"> <br> <br></div>

                <div><label for="mdp">Mot de passe:</label> <br>
                    <input type="password" name="motDePasse" id="mdp"> <br> <br></div>

                <div class="souvenirPlusOublie">
                    <div id="seSouvenir">
                        <label for="souvenir">Se souvenir</label>
                        <input type="checkbox" name="seSouvenir" id="souvenir"> 
                    </div>
                    <br>

                    <div class="mdp_oublie"><a href="google.ca">Mot de passe oublié?</a></div>
                </div> <br>
                <div id="seConnecter">
                    <button type="submit" class="btn btn-outline-light">Se connecter</button> <br> <br>
                </div>
            </form>
        
            <?php if (isset($error)) : ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <br>
            <br>
            <hr>
        </div>
        <div id="register"><a href="register.php"><button type="button" class="btn btn-outline-light">Créer un compte</button></a></div>
    </div>

    <footer>
       
    </footer>
</body>
</html>
