<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" style="text/css" href="bootstrap/css/bootstrap.css">
    <script src="jquery/jquery-3.5.0.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
    <style>

    </style>
</head>
<body id="body_global_cn_cr">
    <header id="header_global_cn_cr">
        <div class="entete_cn_cr">
            <div>
                <img src="images/logo.png"  alt="Image du logo">
            </div>
            <div class="titre_cn_cr">
                <h1>Boutique Livre Passion</h1>
            </div>
            <div class="hide">
                <p>hi</p>
            </div>
        </div>
    </header>
    <div class="bodyInBody_cn_cr">
        <div><h2>Création de compte</h2></div>

        <div>
            <form method="post">
                <div><input placeholder="Votre nom de famille" type="text" name="nomFamilleUser" id="nom"></div> 
                <br>
                <div><input placeholder="Votre prénom" type="text" name="prenomUser" id="prenom"></div>
                <br>
                <div><input placeholder="Votre nom d'utilisateur" type="text" name="entreeUtilisateur" id="utilisateur"></div>
                <br>
                <div><input placeholder="Votre addresse courriel" type="text" name="entreCourriel" id="courriel"></div>
                <br>
                <div><input placeholder="Votre mot de passe" type="password" name="motDePasse" id="mdp"></div>
                <br>
                <div><input placeholder="Confirmation" type="password" name="confirmationPwd" id="pdw"></div>
                <br>
                <div><br> <input type="checkbox" name="accepter" id="terms"> <label for="accepter"">Accepter les <a href="google.ca">termes et conditions d'utilisation</a></label></div>


            </form>
            
        </div>
        <div id="register"><a href="google.ca"><button type="button" class="btn btn-outline-light">Créer un compte</button></a></div>
    </div>

    <footer>
        <div id="containerFooter_cn_cr">
            <div><img src="images/logo.png"alt="image du logo"></div>
            <div class="date_cn_cr">2023-2023</div>
            <div class="aide_cn_cr"><a href="/FAQ.html">Besoin d'aide?</a></div>
        </div>
    </footer>
</body>
</html>