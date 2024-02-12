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
    </style>
</head>
<body>

    <h1>Administration du Site</h1>

    <h2>Ajouter un livre</h2>
    <form action="placeholder.php" method="post">
        <input type="text" name="numero" placeholder="Numéro" required>
        <input type="text" name="titre" placeholder="Titre" required>
        <input type="text" name="auteur" placeholder="Auteur" required>
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

        <button type="submit">Ajouter</button>
    </form>

    <h2>Modifier un livre</h2>
    <form action="placeholder.php" method="post">
       

        <input type="text" name="numero" placeholder="Numéro">
        <input type="text" name="titre" placeholder="Nouveau Titre">
        <input type="text" name="auteur" placeholder="Nouvel Auteur">
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

        <button type="submit">Modifier</button>
    </form>

    <h2>Supprimer un livre</h2>
    <form action="placeholder.php" method="post">
        <input type="text" name="element_id" placeholder="ID de l'élément à supprimer" required>
        <button type="submit">Supprimer</button>
    </form>

    <h2>Rechercher un livre (par code or something)</h2>
    <form action="placeholder.php" method="get">
        <input type="text" name="terme_recherche" placeholder="Rechercher">
        <button type="submit">Rechercher</button>
    </form>

    <!-- Logout -->
    <a href="placeholder.php">Se déconnecter</a>

</body>
</html>
