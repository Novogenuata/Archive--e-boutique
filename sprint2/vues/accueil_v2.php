<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Accueil #2</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="jquery/jquery-3.5.0.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
    <style>
        .navbar-brand{
            margin-top: ;
        }
    </style>
</head>
<body id="body_global_accueil">
    <header id="header_global_accueil">
        <div class="container_header_accueil">
            <div><img src="images/logo.png" alt="image logo"></div>
        <div class="titre_header_accueil"> <br><h1 style="color: white;">Boutique Livre Passion</h1>
            <p style="color: white;">Lire à ne jamais en finir</p></div>
        <div class="barre_cart">
            <div>
                <a href="connexion.html" style="text-decoration: none; color: white;">Se connecter</a>
                <a href="#"><img src="images/logo_basket.png" alt="cart" height="40px"></a>
            </div>

        <nav class="navbar navbar-light ">
            <form class="form-inline">
              <input class="form-control mr-sm-2" type="search" placeholder="Entrez le nom d'un livre" aria-label="Search">
              <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
          </nav>
        </div>
        </div>
    </header>
    <div class="body_accueil">
        <div class="main_container_accueil">
            <div class="container_menu_accueil">
                <div class="row">
                    <div class="col-md-0">
                      <nav class="navbar navbar-expand-lg navbar-light flex-column">
                        <a class="navbar-brand" style="color: white;" >Menu</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul id="ul_accueil" class="navbar-nav flex-column">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><button class="btn btn-outline-light w-100">Accueil</button></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><button class="btn btn-outline-light w-100">En tendance</button></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><button class="btn btn-outline-light w-100">Nouveautés</button></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><button class="btn btn-outline-light w-100">En rabais</button></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="propos.html"><button class="btn btn-outline-light w-100">À propos</button></a>
                              </li>
                            <li class="nav-item">
                                <a class="nav-link" href="FAQ.html"><button class="btn btn-outline-light w-100">FAQ</button></a>
                            </li>
                            
                          </ul>
                        </div>
                      </nav>
                    </div>
                  </div>
            </div>
            <div class="container_contenu_accueil">
                <div class="container_titres_accueil">
                    <div><h2><a href="">En tendance</a></h2></div>
                    <div><h2><a href="">Nouveautés</a></h2></div>
                    <div><h2><a href="">En rabais</a></h2></div>
                </div>
                <div class="scrolls_accueil">
                    <div id="content1" class="overflow-auto p-4 bg-white" style="max-height:700px;"> 
                        <div class="ligne_accueil">
                            <div id="ru">
                                <a href="#"><img src="images/livre_tendance/tlivre-1.png" alt="image livre" height="200px">
                                    <p>
                                        Ru
                                        <br>
                                        De Kim Thuy
                                        <br>14,95 $
                                    </p></a>
                            </div>
                            <div id="reine">
                                <a href="#">
                                <img src="images/livre_tendance/tlivre-2.png" alt="image de livre" height="200px">
                                <p>
                                    La Reine de rien
                                    <br>
                                    De Geneviève Pettersen
                                    <br>
                                    27,95 $
                                </p></a>
                            </div>
                        </div>
                        <hr>
                        <div class="ligne_accueil">
                            <div id="propheties">
                                <a href="#">
                                    <img src="images/livre_tendance/tlivre-3.png" alt="image de livre" height="200px">
                                    <p>
                                    Les Prophéties 
                                    <br>
                                    de la montagne
                                    <br>
                                    De Pattie <br>
                                    O'green
                                    <br>
                                    28,88$
                                </p>
                                </a>
                            </div>
                            <div id="orangeraie">
                                <a href="#">
                                    <img src="images/livre_tendance/tlivre-4.png" alt="image de livre" height="200px">
                                    <p>
                                    L'Orangeraire
                                    <br>
                                    De Larry Tremblay
                                    <br>
                                    14,95$
                                </p>
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="ligne_accueil">
                            <div id="joie">
                                <a href="#"><img src="images/livre_tendance/tlivre-5.png" alt="iamge de livre" height="200px">
                                    <p>
                                        Que notre 
                                        <br>
                                        Joie deneure
                                        <br>
                                        De Kevein Lambert
                                        <br>
                                        28,95$
                                    </p></a>
                            </div>
                            <div id="Tiohtià:ke">
                                <a href="#"><img src="images/livre_tendance/tlivre-6.png" alt="iamge de livre" height="200px">
                                    <p>
                                        Tiohtià:ke
                                        <br>
                                        De Michel Jean
                                        <br>
                                        24,95$
                                    </p></a>
                            </div>
                        </div>
                    </div>
                    <div id="content2" class="overflow-auto p-4 bg-white" style="max-height:700px;">
                        <div class="ligne_accueil">
                            <div id="guiness">
                                <a href="#"><img src="images/livre_nouveauté/nlivre-1.png" alt="image de livre" height="200px">
                                    <p>
                                        Guinness World 2024
                                        <br>
                                        De Collectif
                                        <br>
                                        36,95$
                                    </p></a>
                            </div>
                            <div id="iris">
                                <a href="#"><img src="images/livre_nouveauté/nlivre-2.png" alt="iamge de livre" height="200px">
                                    <p>
                                        L'Iris blanc #40
                                        <br>
                                        De Didier Conrad
                                        <br>
                                        14,95$
                                    </p></a>
                            </div>
                        </div>
                        <hr>
                        <div class="ligne_accueil">
                            <div id="ripou">
                                <a href="#"><img src="images/livre_nouveauté/nlivre-3.png" alt="image de livre" height="200px">
                                    <p>
                                        Le Ripou des Hells
                                        <br>
                                        De Eric Thibault
                                        <br>
                                        12,99$
                                    </p></a>
                            </div>
                            <div id="destin">
                                <a href="#"><img src="images/livre_nouveauté/nlivre-4.png" alt="image de livre" height="200px">
                                    <p>
                                        Le destin 
                                        <br>
                                        c'est les autres
                                        <br>
                                        De Claudine Bourbonnais
                                        <br>
                                        7,99$
                                    </p></a>
                            </div>
                        </div>
                        <hr>
                        <div class="ligne_accueil">
                            <div id="Tenesse">
                                <a href="#"><img src="images/livre_nouveauté/nlivre-5.png" alt="image de livre" height="200px">
                                    <p>
                                        Tenesse
                                        <br>
                                        De Audrée McNicoll
                                        <br>
                                        10,99$
                                    </p></a>
                            </div>
                            <div id="retour">
                                <a href="#"><img src="images/livre_nouveauté/nlivre-6.png" alt="image de livre" height="200px">
                                    <p>
                                        Le Retour 
                                        <br>
                                        de l'oie blanche
                                        <br>
                                        De Mélissa Perron
                                        <br>
                                        21,99$
                                    </p></a>
                            </div>
                        </div>
                    </div>



                    <div id="content3" class="overflow-auto p-4 bg-white" style="max-height:700px;">
                        <div class="ligne_accueil">
                            <div id="amour">
                                <a href="#"><img src="images/livre_rabais/Image1.png" alt="image de livre" height="200px">
                                    <p>
                                        Pour l'amour d'un choix
                                        <br>
                                        De Danielle Decoste
                                        <br>
                                        <span class="sale"> 24,95$ </span> 10,95$
                                    </p></a>
                            </div>
                            <div id="nobody">
                                <a href="#"><img src="images/livre_rabais/Image2.png" alt="image de livre" height="200px">
                                    <p>
                                        Mon nom est nobody
                                        <br>
                                        De Lillian Lanoue
                                        <br>
                                        <span class="sale"> 24,95</span> 7,95$
                                    </p></a>
                            </div>
                        </div>
                        <hr>
                        <div class="ligne_accueil">
                            <div id="heritage">
                                <a href="#"><img src="images/livre_rabais/Image3.png" alt="image de livre" height="200px">
                                    <p>
                                        Héritage Hunter
                                        <br>
                                        De Jennifer Pelletier
                                        <br>
                                        <span class="sale"> 26,95$</span> 22,95$
                                    </p></a>
                            </div>
                            <div id="sombre">
                                <a href="#"><img src="images/livre_rabais/Image4.png" alt="iamge de livre" height="200px">
                                    <p>
                                        Sombre Chaos
                                        <br>
                                        De Jennifer Pelletier
                                        <br>
                                        <span class="sale">28,95$</span> 23,95$
                                    </p></a>
                            </div>
                        </div>
                        <hr>
                        <div class="ligne_accueil">
                            <div id="karma">
                                <a href="#"><img src="images/livre_rabais/Image5.png" alt="image de livre" height="200px">
                                    <p>
                                        Karma abîmé
                                        <br>
                                        De Réjean Labelle
                                        <br>
                                        <span class="sale">26,95$</span> 18,95$
                                    </p></a>
                            </div>
                            <div id="somber">
                                <a href="#"><img src="images/livre_rabais/Image6.png" alt="image de livre" height="200px">
                                    <p>
                                        Somber Jann
                                        <br>
                                        De Haven Dean
                                        <br>
                                        <span class="sale">34,95$</span> 27,95$
                                    </p></a>
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
                <img src="images/logo.png" alt="logo">
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
                <a href="propos.html" class="special-link"><em>À propos de ce magasin</em></a>
                <br>
                <br>            
                <a href="FAQ.html" class="special-link"><em>FAQ</em></a>
            </div>
            
            <div class="logos_socials">
                <a href="https://www.instagram.com/"   target="_blank">
                    <img src="images/logo/logo_instagram.png" height="50px" alt="logo_instagram">
                </a>
                <a href="https://www.twitter.com/"   target="_blank">
                    <img src="images/logo/logo_twitter.png" height="50px" alt="logo_twitter">
                </a>
                <a href="https://www.facebook.com/"   target="_blank">
                    <img src="images/logo/logo_facebook.png" height="50px" alt="logo_facebook">
                </a>
                <a href="https://www.youtube.com/"   target="_blank">
                    <img src="images/logo/logo_youtube.png" height="50px" alt="logo_youtube">
                </a>
            </div>
            <div    class="mise-a-jour">
                <a  href="creationCompte.html"><em>Inscrivez-vous afin de recevoir les mises a jour en premier</em></a>
            </div>
        </div>
    </footer>
</body>
</html>