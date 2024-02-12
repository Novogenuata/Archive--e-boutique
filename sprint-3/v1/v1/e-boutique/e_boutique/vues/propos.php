<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_propos.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>À Propos</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="jquery/jquery-3.5.0.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<header id="header_global_accueil">
        <div class="container_header_accueil">
            
            <a href="../vues/accueil_v2.php"><div><img src="../images/logo.png" alt="image logo"></div></a>

        <div class="titre_header_accueil"> <br><h1 style="color: white;">Boutique Livre Passion</h1>
            <p style="color: white;">Lire à ne jamais en finir</p></div>
        <div class="barre_cart">
            <div>
                <a href="../vues/connexion.php" style="text-decoration: none; color: white;">Se connecter</a>
                <a href="../index.php?action=voircheckout"><img src="../images/logo_basket.png" alt="cart" height="40px"></a>
            </div>

        <nav class="navbar navbar-light ">
            <form class="form-inline" id="rechercheLivreParCode">
              <input class="form-control mr-sm-2" type="search" placeholder="# d'un livre ex:101" aria-label="Search" id="bookSearchInput">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
          </nav>
        </div>
        <script>
            document.getElementById('rechercheLivreParCode').addEventListener('submit', function(event) {
                event.preventDefault();
                var bookNumber = document.getElementById('bookSearchInput').value;
                window.location.href = '../index.php?action=VoirUnLivre&numero=' + bookNumber;
            });
        </script>
        </div>
    </header>
    <div class="bodyMain">
        
        <div id="histoire"  class="section-title"  style="background-color: #99CCFF"><h3>Notre histoire</h3>
          <p>Nous avons créé ce site web dans le cadre de notre projet informatique pour l'année 2023. Les créateurs de ce site sont : Martin King Sum So, Ben-Khayat Yassine et Wamback Sigourney Xenia.
          </p>
        </div>
    
        <div id="mission"   class="section-title"   style="background-color:#FFCC99"><h3> Notre mission</h3>
            <p>Notre mission est de rendre les livres plus attrayants pour ceux qui ne sont pas encore intéressés, tout en les vendant.</p>
        </div>

        <div id="carriere"  class="section-title"  style="background-color: #6666FF"><h3>Carrières</h3>
            <p>Nous sommes complets et nous recrutons exclusivement des élèves du Collège de Rosemont.</p>
        </div>

        <div    id="reference"  class="section-title"  style=" background-color: #FF9999"><h3>Référence</h3>
            <a href="https://www.iconsdb.com/"  target="_blank">logo:iconsdb</a>
            <a href="https://www.renaud-bray.com/accueil.aspx"  target="_blank">en tete et livre:renaud-bray</a>
            <a href="https://www.groupecoopsco.com/fr/boutique/panier"  target="_blank">panier:groupecoopsco</a>
            <a href="https://www.crosemont.qc.ca/"  target="_blank">pied:crosemont</a>          
            <a href="https://www.w3schools.com/"  target="_blank">référence de codage:w3schools</a>
        </div>
        
        <div id="contact"   class="section-title"  style="background-color: #66FF66;"><h3>Contactez-nous</h3>
            <table>
                <tr>
                    <td>Adresse:</td>
                    <td>
                        <a href="https://maps.app.goo.gl/rbLDorWTnKetnm5E7" target="_blank">
                            <em>6400, 16e Avenue, Montréal (Québec) H1X 2S9</em>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>Contact relations investisseurs: </td>
                     <td>collegeRosemont@gmail.com</td>
                 </tr>
                <tr>
                    <td>Donation: </td>
                    <td>mercibeaucoup@gmail.com</td>
                </tr>
            </table>
        </div>            
    </div>
    <footer>
        <div    class="container_footer"   style="color: white;">
            <div>
                <img src="../images/logo.png" alt="logo">
            </div>
            <div class="gap">
                <h4>Livre Passion</h4>
                <br>
                <p><em>6400 16e Avenue,</em> </p>
                <p><em>Montréal, QC H1X 2S9</em></p>
            </div>
            <div    class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.6554751880813!2d-73.58486922372091!3d45.55725577107566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91eace22b9bcf%3A0x18799aed17aa23d9!2sColl%C3%A8ge%20de%20Rosemont!5e0!3m2!1sfr!2sca!4v1698452878133!5m2!1sfr!2sca" width="500" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="propos_du_magasin_FAQ">
                <h3>Information</h3>
                <br>
                <a href="propos.php" class="special-link"><em>À propos de ce magasin</em></a>
                <br>
                <br>            
                <a href="FAQ.php" class="special-link"><em>FAQ</em></a>
                
            </div>
            
            
            <div class="logos_socials">
                <a href="https://www.instagram.com/"   target="_blank">
                    <img src="../images/logo/logo_instagram.png" height="50px" alt="logo_instagram">
                </a>
                <a href="https://www.twitter.com/"   target="_blank">
                    <img src="../images/logo/logo_twitter.png" height="50px" alt="logo_twitter">
                </a>
                <a href="https://www.facebook.com/"   target="_blank">
                    <img src="../images/logo/logo_facebook.png" height="50px" alt="logo_facebook">
                </a>
                <a href="https://www.youtube.com/"   target="_blank">
                    <img src="../images/logo/logo_youtube.png" height="50px" alt="logo_youtube">
                </a>
            </div>
            <div    class="mise-a-jour">
                <a  href="creationCompte.html"><em>Inscrivez-vous afin de recevoir les mises a jour en premier</em></a>
            </div>
        </div>
    </footer>
</body>
</html>
