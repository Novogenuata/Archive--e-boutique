<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <style>
        :root {
            --header_AND_footer: rgba(69, 45, 121, 1);
            --body: rgba(127, 126, 168, 0.9);
            --logoColor: #0066CC;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(var(--body), var(--header_AND_footer));
        }

        h1, h2 {
            color: white;
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
        }

        input, button {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: var(--header_AND_footer);
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: var(--body);
        }

        a {
            color: var(--header_AND_footer);
            text-decoration: none;
            text-align: center;
        }

        a:hover {
            text-decoration: underline;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: var(--header_AND_footer);
            color: white;
        }
        #adminresultat {
            margin-top: 50px; 
    text-align: center;
    }

    .bruh{
        text-align: center;
    color: white;
 
   
    }
    </style>
</head>
<body>
    <?php


   include_once("../modele/livre.class.php");
   include_once('../modele/DAO/livreDAO.class.php');
   

    try {
        $connexion = ConnexionBD::getInstance();
        echo "Success";
    } catch (Exception $e) {
        echo "Unsuccessful" . $e->getMessage();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ajouter_livre"])) {
         
        try {
          
            $newLivre = new Livre(
                $_POST["numero"],
                $_POST["titre"],
                $_POST["auteur"],
                $_POST["description"],
                $_POST["date_publication"],
                $_POST["nbr_pages"],
                $_POST["editeur"],
                $_POST["edition"],
                $_POST["isbn10"],
                $_POST["isbn13"],
                $_POST["prix"],
                $_POST["categorie"],
                $_POST["label"],
                $_POST["chemin_img"],
                $_POST["quantite"]
            );
            if (LivreDAO::inserer($newLivre)) {
                echo "| livre ajoute";
            } else {
                echo "| erreur.";
            }
        } catch (Exception $e) {
            echo "erreur: " . $e->getMessage();
        }

    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["modifier_livre"])) {

            
        
                try{
                  
                    $numero = $_POST["numero"];
                    $newTitre = $_POST["titre"];
                    $newAuteur = $_POST["auteur"];
                    $newDesc = $_POST["description"];
                    $newDatePublication = $_POST["date_publication"];
                    $newNbrPages = $_POST["nbr_pages"];
                    $newEditeur = $_POST["editeur"];
                    $newEdition = $_POST["edition"];
                    $newIsbn10 = $_POST["isbn10"];
                    $newIsbn13 = $_POST["isbn13"];
                    $newPrix = $_POST["prix"];
                    $newCategorie = $_POST["categorie"];
                    $newLabel = $_POST["label"];
                    $newCheminImg = $_POST["chemin_img"];
                    $newQuantite = $_POST["quantite"];
    
                    $modifiedLivre = new Livre(
                        $numero,
                        $newTitre,
                        $newAuteur,
                        $newDesc,
                        $newDatePublication,
                        $newNbrPages,
                        $newEditeur,
                        $newEdition,
                        $newIsbn10,
                        $newIsbn13,
                        $newPrix,
                        $newCategorie,
                        $newLabel,
                        $newCheminImg,
                        $newQuantite
                    );
                    
                    $connexion->beginTransaction();

                    if (LivreDAO::modifier($modifiedLivre)) {
                        echo "Livre modifié avec succès";
                        $connexion->commit();
                    } else {
                        echo "Erreur lors de la modification du livre." . print_r($connexion->errorInfo(), true);
                        $connexion->rollBack();
                    }
                } catch (Exception $e) {
                    echo "Erreur: " . $e->getMessage();
                    echo "<br>File: " . $e->getFile();
                    echo "<br>Line: " . $e->getLine();
                    echo "<br>Trace: <pre>" . $e->getTraceAsString() . "</pre>";
                    $connexion->rollBack(); 
                }
                var_dump($_POST);
            }
             elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["supprimer_livre"])) {
                try {
                    $numeroToDelete = !empty($_POST["numero_supprimer"]) ? $_POST["numero_supprimer"] : null;
            
                    if ($numeroToDelete !== null) {
                        $bookToDelete = new Livre($numeroToDelete, "", "", "", "", 0, "", "", "", "", 0, "", "", "", 0);
                        if (LivreDAO::supprimer($bookToDelete)) {
                            echo "Livre supprimé avec succès";
                        } else {
                            echo "Erreur lors de la suppression du livre.";
                        }
                    } else {
                        echo "Numéro du livre à supprimer non spécifié.";
                    }
                } catch (Exception $e) {
                    echo "Erreur: " . $e->getMessage();
                }

            } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["rechercher_livre"])) {
                $termeRecherche = isset($_POST["terme_recherche"]) ? $_POST["terme_recherche"] : null;
            
                if ($termeRecherche !== null) {
                    try {
                        $resultatRecherche = LivreDAO::chercher($termeRecherche);
            
                        if ($resultatRecherche !== null) {
                            echo "<div id='adminresultat'>";
                            echo "<table border='1'>";
    echo "<tr><th>Numéro</th><th>Titre</th><th>Auteur</th><th>Date de publication</th><th>Nombre de pages</th><th>Éditeur</th><th>Édition</th><th>ISBN10</th><th>ISBN13</th><th>Prix</th><th>Catégorie</th><th>Label</th><th>Chemin de l'image</th><th>Quantité</th></tr>";
    echo "<tr>";
    echo "<td>" . $resultatRecherche->getNumero() . "</td>";
    echo "<td>" . $resultatRecherche->getTitre() . "</td>";
    echo "<td>" . $resultatRecherche->getAuteur() . "</td>";
    echo "<td>" . $resultatRecherche->getDatePublication() . "</td>";
    echo "<td>" . $resultatRecherche->getNbrPages() . "</td>";
    echo "<td>" . $resultatRecherche->getEditeur() . "</td>";
    echo "<td>" . $resultatRecherche->getEdition() . "</td>";
    echo "<td>" . $resultatRecherche->getIsbn10() . "</td>";
    echo "<td>" . $resultatRecherche->getIsbn13() . "</td>";
    echo "<td>" . $resultatRecherche->getPrix() . "</td>";
    echo "<td>" . $resultatRecherche->getCategorie() . "</td>";
    echo "<td>" . $resultatRecherche->getLabel() . "</td>";
    echo "<td>" . $resultatRecherche->getCheminImg() . "</td>";
    echo "<td>" . $resultatRecherche->getQuantite() . "</td>";
    echo "</tr>";
    echo "</table>";
    echo "</div>";
                        } else {
                            echo "<div id='adminresultat'>";
                            echo "<p>Aucun résultat trouvé pour le terme de recherche \"$termeRecherche\"</p>";
                            echo "</div>";
                        }
                    } catch (Exception $e) {
                        echo "<div id='adminresultat'>";
                        echo "Erreur lors de la recherche : " . $e->getMessage();
                        echo "</div>";
                    }
                } else {
                    echo "<div id='adminresultat'>";
                    echo "<p>Veuillez spécifier un terme de recherche.</p>";
                    echo "</div>";
                }
            }
            
       
    
    



    ?>

    <h1>Administration du Site</h1>
  


    <h2>Ajouter un livre</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
   
        <input type="text" name="numero" placeholder="Numéro" required>
        <input type="text" name="titre" placeholder="Titre" required>
        <input type="text" name="auteur" placeholder="Auteur" required>
        <input type="text" name="description" placeholder="Description" required>
        <input type="date" name="date_publication" placeholder="Date de publication" required>
        <input type="number" name="nbr_pages" placeholder="Nombre de pages" required>
        <input type="text" name="editeur" placeholder="Éditeur" required>
        <input type="text" name="edition" placeholder="Édition" required>
        <input type="text" name="isbn10" placeholder="ISBN10" required>
        <input type="text" name="isbn13" placeholder="ISBN13" required>
        <input type="number" name="prix" placeholder="Prix" required>
        <input type="text" name="categorie" placeholder="Catégorie" required>
        <input type="text" name="label" placeholder="Label">
        <input type="text" name="chemin_img" placeholder="Chemin de l'image">
        <input type="number" name="quantite" placeholder="Quantité" required>

        <button type="submit" name="ajouter_livre">Ajouter</button>
    </form>
   
    <h2>Modifier un livre</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">

       

        <input type="text" name="numero" placeholder="Numéro">
        <input type="text" name="titre" placeholder="Nouveau Titre">
        <input type="text" name="auteur" placeholder="Nouvel Auteur">
        <input type="text" name="description" placeholder="Description">
        <input type="date" name="date_publication" placeholder="Nouvelle Date de publication">
        <input type="number" name="nbr_pages" placeholder="Nouveau Nombre de pages">
        <input type="text" name="editeur" placeholder="Nouvel Éditeur">
        <input type="text" name="edition" placeholder="Nouvelle Édition">
        <input type="text" name="isbn10" placeholder="Nouvel ISBN10">
        <input type="text" name="isbn13" placeholder="Nouvel ISBN13">
        <input type="number" name="prix" placeholder="Nouveau Prix">
        <input type="text" name="categorie" placeholder="Nouvelle Catégorie">
        <input type="text" name="label" placeholder="Nouveau Label">
        <input type="text" name="chemin_img" placeholder="Nouveau Chemin de l'image">
        <input type="number" name="quantite" placeholder="Nouvelle Quantité">

        <button type="submit" name="modifier_livre">Modifier</button>
    </form>

    <h2>Supprimer un livre</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" name="numero_supprimer"  placeholder="ID de l'élément à supprimer" required>
        <button type="submit" name="supprimer_livre">Supprimer</button>
    </form>

    <h2>Rechercher un livre (par code)</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <input type="text" name="terme_recherche" placeholder="Rechercher">
        <button type="submit" name="rechercher_livre">Rechercher</button>
    </form>

    <a class = "bruh" href="accueil_v2.php">Retour à l'accueil</a>

  

  

</body>
</html>
