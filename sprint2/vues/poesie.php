<?php if(!ISSET($controleur)) header("Location: ..\index.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Poesie</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="../jquery/jquery-3.5.0.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <div class="body_global_categorie">
        <header class="header_global_categorie">
            <div class="container_header_categorie">
                <div><img src="../images/logo.png" alt="image logo"></div>
            <div class="titre_header_categorie"> <br><h1 style="color: white;">Boutique Livre Passion</h1>
                <p style="color: white;">Lire à ne jamais en finir</p></div>
            <div class="barre_cart">
                <div>
                    <a href="connexion.html" style="text-decoration: none; color: white;">Se connecter</a>
                    <a href="#"><img src="../images/logo_basket.png" alt="cart" height="40px"></a>
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
        <div class="body_categorie">
            <div class="main_container_categorie">
                <div class="container_menu_categorie">
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
                <div class="container_contenu_categorie">
                  <div class="affichage_livres">
                    <?php
                      include_once("DAO/LivreDAO.php");
                      
                    ?>
                    <div class="display_livres">
                      <?php if ($livre): ?>
                      <div>
                      <?php
                      $numeroLivre = '201';
                      $numeroLivre = $_GET['numero'] ?? '';
                      $livre = LivreDAO::chercher($numeroLivre);
                      ?>
                      <div>
                        <img src="<?php echo $livre->getCheminImg(); ?>" alt="Book Cover" width="150">
                      </div>
                       <div>
                        <h1><?php echo $book->getTitre(); ?></h1>
                        <p>Author: <?php echo $book->getAuteur(); ?></p>
                      </div>
                      </div>
                      <div>
                      <?php
                      $numeroLivre = '202';
                      $numeroLivre = $_GET['numero'] ?? '';
                      $livre = LivreDAO::chercher($numeroLivre);
                      ?>
                      <div>
                        <img src="<?php echo $livre->getCheminImg(); ?>" alt="Book Cover" width="150">
                      </div>
                       <div>
                        <h1><?php echo $book->getTitre(); ?></h1>
                        <p>Author: <?php echo $book->getAuteur(); ?></p>
                      </div>
                      </div>
                      <div>
                      <?php
                      $numeroLivre = '203';
                      $numeroLivre = $_GET['numero'] ?? '';
                      $livre = LivreDAO::chercher($numeroLivre);
                      ?>
                      <div>
                        <img src="<?php echo $livre->getCheminImg(); ?>" alt="Book Cover" width="150">
                      </div>
                       <div>
                        <h1><?php echo $book->getTitre(); ?></h1>
                        <p>Author: <?php echo $book->getAuteur(); ?></p>
                      </div>
                      </div>
                      <div>
                      <?php
                      $numeroLivre = '204';
                      $numeroLivre = $_GET['numero'] ?? '';
                      $livre = LivreDAO::chercher($numeroLivre);
                      ?>
                      <div>
                        <img src="<?php echo $livre->getCheminImg(); ?>" alt="Book Cover" width="150">
                      </div>
                       <div>
                        <h1><?php echo $book->getTitre(); ?></h1>
                        <p>Author: <?php echo $book->getAuteur(); ?></p>
                      </div>
                      </div>
                      <div>
                      <?php
                      $numeroLivre = '205';
                      $numeroLivre = $_GET['numero'] ?? '';
                      $livre = LivreDAO::chercher($numeroLivre);
                      ?>
                      <div>
                        <img src="<?php echo $livre->getCheminImg(); ?>" alt="Book Cover" width="150">
                      </div>
                       <div>
                        <h1><?php echo $book->getTitre(); ?></h1>
                        <p>Author: <?php echo $book->getAuteur(); ?></p>
                      </div>
                      </div>
                      <div>
                      <?php
                      $numeroLivre = '206';
                      $numeroLivre = $_GET['numero'] ?? '';
                      $livre = LivreDAO::chercher($numeroLivre);
                      ?>
                      <div>
                        <img src="<?php echo $livre->getCheminImg(); ?>" alt="Book Cover" width="150">
                      </div>
                       <div>
                        <h1><?php echo $book->getTitre(); ?></h1>
                        <p>Author: <?php echo $book->getAuteur(); ?></p>
                      </div>
                      </div>
                      <div>
                      <?php
                      $numeroLivre = '207';
                      $numeroLivre = $_GET['numero'] ?? '';
                      $livre = LivreDAO::chercher($numeroLivre);
                      ?>
                      <div>
                        <img src="<?php echo $livre->getCheminImg(); ?>" alt="Book Cover" width="150">
                      </div>
                       <div>
                        <h1><?php echo $book->getTitre(); ?></h1>
                        <p>Author: <?php echo $book->getAuteur(); ?></p>
                      </div>
                      </div>
                      <div>
                      <?php
                      $numeroLivre = '208';
                      $numeroLivre = $_GET['numero'] ?? '';
                      $livre = LivreDAO::chercher($numeroLivre);
                      ?>
                      <div>
                        <img src="<?php echo $livre->getCheminImg(); ?>" alt="Book Cover" width="150">
                      </div>
                       <div>
                        <h1><?php echo $book->getTitre(); ?></h1>
                        <p>Author: <?php echo $book->getAuteur(); ?></p>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <footer>
            
        </footer>
    </div>
</body>
</html>