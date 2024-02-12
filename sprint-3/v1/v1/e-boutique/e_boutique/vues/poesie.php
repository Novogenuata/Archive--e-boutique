<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Accueil #2</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../jquery/jquery-3.5.0.min.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
    <script src="jquery/jquery.js" ></script>
    <style>
        .navbar-brand{
            margin-top: ;
        }
    </style>
</head>
<?php
include_once("../modele/DAO/livreDAO.class.php");
?>
<body id="body_global_accueil">
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
    <div class="body_accueil">
        <div class="main_container_accueil">
            <div class="container_menu_accueil">
                <div class="row">
                    <div class="col-md-0">
                      <nav class="navbar navbar-expand-lg navbar-light flex-column">

                        <button id="menuButton" class="btn btn-primary navbar-brand">Menu</button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul id="ul_accueil" class="navbar-nav flex-column menu-content">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul id="ul_accueil" class="navbar-nav flex-column">
                            <li class="nav-item active">
                                <a class="nav-link" href="accueil_v2.php"><button class="btn btn-outline-light w-100">Accueil</button></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="policier.php"><button class="btn btn-outline-light w-100">Policier</button></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="poesie.php"><button class="btn btn-outline-light w-100">Poésie</button></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="scienceFiction.php"><button class="btn btn-outline-light w-100">Science-fiction</button></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="histoire.php"><button class="btn btn-outline-light w-100">Histoire</button></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="propos.php"><button class="btn btn-outline-light w-100">À propos</button></a>
                              </li>
                            <li class="nav-item">
                                <a class="nav-link" href="FAQ.php"><button class="btn btn-outline-light w-100">FAQ</button></a>
                            </li>
                           
                          </ul>
                        </div>
                      </nav>
                    </div>
                  </div>
            </div>
            <div class="container_contenu_accueil">
                <div class="container_titres_accueil">
                    <div><h2 style="font-weight: bolder;">Poésie</h2></div>
                    
                </div>
                <div class="categorieLivresBD">
                    <div id="scrollCategorie" class="overflow-auto p-4 bg-white" style="max-height:650px;">
                        <div class="allRows">
                            <div class="row1">
                                <div class="contenuRow">
                                    <div class="rowObject1">
                                      <?php
                                        $bookNumber4 = "201";
                                        $livre4 = LivreDAO::chercher($bookNumber4);
                                        ?>
                                        <a href="../index.php?action=VoirUnLivre&numero=<?php 
                                        echo $bookNumber4;
                                        ?>">
                                            <div>
                                                <img src="../images/livres/poesie/<?php 
                                                echo $bookNumber4;
                                                ?>.jpg" alt="" height="300px">
                                            </div>
                                            <div class="infosLivreCategorie">
                                                <?php 
                                                echo $livre4->getTitre();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getAuteur();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getPrix();
                                                ?>$
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rowObject1">
                                      <?php
                                        $bookNumber4 = "202";
                                        $livre4 = LivreDAO::chercher($bookNumber4);
                                        ?>
                                        <a href="../index.php?action=VoirUnLivre&numero=<?php 
                                        echo $bookNumber4;
                                        ?>">
                                            <div>
                                                <img src="../images/livres/poesie/<?php 
                                                echo $bookNumber4;
                                                ?>.jpg" alt="" height="300px">
                                            </div>
                                            <div class="infosLivreCategorie">
                                                <?php 
                                                echo $livre4->getTitre();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getAuteur();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getPrix();
                                                ?>$
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rowObject1">
                                      <?php
                                        $bookNumber4 = "203";
                                        $livre4 = LivreDAO::chercher($bookNumber4);
                                        ?>
                                        <a href="../index.php?action=VoirUnLivre&numero=<?php 
                                        echo $bookNumber4;
                                        ?>">
                                            <div>
                                                <img src="../images/livres/poesie/<?php 
                                                echo $bookNumber4;
                                                ?>.jpg" alt="" height="300px">
                                            </div>
                                            <div class="infosLivreCategorie">
                                                <?php 
                                                echo $livre4->getTitre();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getAuteur();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getPrix();
                                                ?>$
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row1">
                                <div class="contenuRow">
                                <div class="rowObject1">
                                      <?php
                                        $bookNumber4 = "204";
                                        $livre4 = LivreDAO::chercher($bookNumber4);
                                        ?>
                                        <a href="../index.php?action=VoirUnLivre&numero=<?php 
                                        echo $bookNumber4;
                                        ?>">
                                            <div>
                                                <img src="../images/livres/poesie/<?php 
                                                echo $bookNumber4;
                                                ?>.jpg" alt="" height="300px">
                                            </div>
                                            <div class="infosLivreCategorie">
                                                <?php 
                                                echo $livre4->getTitre();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getAuteur();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getPrix();
                                                ?>$
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rowObject1">
                                      <?php
                                        $bookNumber4 = "205";
                                        $livre4 = LivreDAO::chercher($bookNumber4);
                                        ?>
                                        <a href="../index.php?action=VoirUnLivre&numero=<?php 
                                        echo $bookNumber4;
                                        ?>">
                                            <div>
                                                <img src="../images/livres/poesie/<?php 
                                                echo $bookNumber4;
                                                ?>.jpg" alt="" height="300px">
                                            </div>
                                            <div class="infosLivreCategorie">
                                                <?php 
                                                echo $livre4->getTitre();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getAuteur();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getPrix();
                                                ?>$
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rowObject1">
                                      <?php
                                        $bookNumber4 = "206";
                                        $livre4 = LivreDAO::chercher($bookNumber4);
                                        ?>
                                        <a href="../index.php?action=VoirUnLivre&numero=<?php 
                                        echo $bookNumber4;
                                        ?>">
                                            <div>
                                                <img src="../images/livres/poesie/<?php 
                                                echo $bookNumber4;
                                                ?>.jpg" alt="" height="300px">
                                            </div>
                                            <div class="infosLivreCategorie">
                                                <?php 
                                                echo $livre4->getTitre();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getAuteur();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getPrix();
                                                ?>$
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row1">
                                <div class="contenuRow">
                                <div class="rowObject1">
                                      <?php
                                        $bookNumber4 = "207";
                                        $livre4 = LivreDAO::chercher($bookNumber4);
                                        ?>
                                        <a href="../index.php?action=VoirUnLivre&numero=<?php 
                                        echo $bookNumber4;
                                        ?>">
                                            <div>
                                                <img src="../images/livres/poesie/<?php 
                                                echo $bookNumber4;
                                                ?>.jpg" alt="" height="300px">
                                            </div>
                                            <div class="infosLivreCategorie">
                                                <?php 
                                                echo $livre4->getTitre();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getAuteur();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getPrix();
                                                ?>$
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rowObject1">
                                      <?php
                                        $bookNumber4 = "208";
                                        $livre4 = LivreDAO::chercher($bookNumber4);
                                        ?>
                                        <a href="../index.php?action=VoirUnLivre&numero=<?php 
                                        echo $bookNumber4;
                                        ?>">
                                            <div>
                                                <img src="../images/livres/poesie/<?php 
                                                echo $bookNumber4;
                                                ?>.jpg" alt="" height="300px">
                                            </div>
                                            <div class="infosLivreCategorie">
                                                <?php 
                                                echo $livre4->getTitre();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getAuteur();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getPrix();
                                                ?>$
                                            </div>
                                        </a>
                                    </div>
                                    <div class="rowObject1">
                                      <?php
                                        $bookNumber4 = "209";
                                        $livre4 = LivreDAO::chercher($bookNumber4);
                                        ?>
                                        <a href="../index.php?action=VoirUnLivre&numero=<?php 
                                        echo $bookNumber4;
                                        ?>">
                                            <div>
                                                <img src="../images/livres/poesie/<?php 
                                                echo $bookNumber4;
                                                ?>.jpg" alt="" height="300px">
                                            </div>
                                            <div class="infosLivreCategorie">
                                                <?php 
                                                echo $livre4->getTitre();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getAuteur();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getPrix();
                                                ?>$
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row1">
                                <div class="contenuRow">
                                <div class="rowObject1">
                                      <?php
                                        $bookNumber4 = "210";
                                        $livre4 = LivreDAO::chercher($bookNumber4);
                                        ?>
                                        <a href="../index.php?action=VoirUnLivre&numero=<?php 
                                        echo $bookNumber4;
                                        ?>">
                                            <div>
                                                <img src="../images/livres/poesie/<?php 
                                                echo $bookNumber4;
                                                ?>.jpg" alt="" height="300px">
                                            </div>
                                            <div class="infosLivreCategorie">
                                                <?php 
                                                echo $livre4->getTitre();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getAuteur();
                                                ?>
                                                <br>
                                                <?php 
                                                echo $livre4->getPrix();
                                                ?>$
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer_global_accueil">
        <div    class="container_footer_accueil"   style="color: white;">
            <div>
                <img src="../images/logo.png" alt="logo">
            </div>
            <div class="gap_accueil">
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
                <a  href="register.php"><em>Inscrivez-vous afin de recevoir les mises a jour en premier</em></a>
                
            </div>
            <h5 id="footerText">Achetez un livre MAINTENANT et OBTENEZ-EN UN GRATUITEMENT. Livraison gratuite si vous dépensez plus de 30$</h5>
        </div>
    </footer>
</body>
</html>