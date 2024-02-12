<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Page</title>
    <style>
        :root {
            --header_AND_footer: rgba(69, 45, 121, 1);
            --body: rgba(127, 126, 168, 0.9);
            --logoColor: #0066CC;
        }

        .bodyFAQ {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-image: linear-gradient(var(--header_AND_footer), var(--body));
        }

        .headerFAQ {
            background-color: var(--header_AND_footer);
            padding: 10px;
            text-align: center;
            align-items: center;
            color: white;
        }

        .headerFAQ>.titleFAQ {
            align-items: center;
        }

        .moncompteFAQ {
            font-size: smaller;
        }

        .navFAQ {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .titleFAQ {
            font-family: 'Arial', sans-serif;
        }

        .subtitleFAQ {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        .mainFAQ {
            padding: 20px;
            min-height: 100vh;
        }

        .faq-box {
            margin: 5px;
            border: 1px solid #ccc;
            padding: 50px;
            border-radius: 8px;
            height: 100%;
            background-color: #BEBEBE;
        }

        .faq-item {
            position: relative;
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border-left: solid var(--header_AND_footer) 10px;
            background-color: #D9D9D9;
        }

        .faq-item:after {
            content: ' +';
            position: absolute;
            top: 50%;
            left: 100%;
            transform: translate(-160%, -50%);
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .faq-item.active:after {
            content: '-';
            transform: translate(-160%, -50%) rotate(360deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }

        .faq-item.active .faq-answer {
            max-height: 1000px; 
        }

        .footerFAQ {
            background-color: var(--header_AND_footer);
            padding: 10px;
            text-align: center;
            color: white;
            font-size: smaller;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            color: var(--body);
        }

        @media (max-width: 600px) {
            .headerFAQ {
                padding: 5px;
                text-align: center;
            }

            .titleFAQ {
                text-align: center;
            }

            .subtitleFAQ {
                text-align: center;
            }

            .navFAQ {
                flex-direction: column;
                align-items: center;
            }

            .moncompteFAQ {
                text-align: center;
                margin-top: 10px;
            }

            .faq-box {
                padding: 20px;
            }

            .imgFAQ {
                display: none;
            }
        }
    </style>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bodyFAQ">

    <header class="headerFAQ">
        <nav class="navFAQ">
            <div class="imgFAQ">
                <a href="accueil_v2.php"><img src="../images/logo.png" alt="Boutique Livre Logo"  height="104px"></a>
            </div>
            <div class=" titleFAQ">
                <h1>Boutique Livre passion</h1>
                <h6 class="subtitleFAQ">Lire à ne jamais en finir</h6>
            </div>
            <div class="moncompteFAQ">
                <a href="accueil_v2.php">Retour a l'acceuil</a>
            </div>
        </nav>
    </header>

    <main class="mainFAQ">
        <div class="faq-box">
            <h2>FAQ</h2>

            <div class="faq-item" onclick="toggleFAQ('commandes')">
                Commandes en ligne
                <div class="faq-answer" id="commandes"> <p> Pour effectuer une commande en ligne de livres, suivez ces étapes simples. Tout d'abord, accédez au site web de la librairie en ligne. Parcourez le catalogue pour trouver les livres que vous souhaitez acheter. Une fois que vous avez sélectionné un livre, cliquez sur le bouton "Ajouter au panier". Vous pouvez continuer à parcourir le catalogue et ajouter d'autres livres à votre panier. Lorsque vous avez terminé votre sélection, accédez à votre panier, où vous pourrez voir la liste des livres que vous avez choisis. Vérifiez que tout est correct, puis cliquez sur le bouton "Passer à la caisse" ou "Finaliser la commande". Vous serez redirigé vers une page où vous devrez fournir vos coordonnées de livraison et de paiement. Une fois toutes les informations nécessaires fournies, confirmez votre commande. Vous recevrez ensuite une confirmation de commande par e-mail. Attendez ensuite la livraison de vos livres à l'adresse que vous avez fournie. C'est un moyen pratique et accessible de découvrir de nouveaux livres et de les recevoir directement chez vous.</p></div>
            </div>

            <div class="faq-item" onclick="toggleFAQ('services')">
                Services offerts
                <div class="faq-answer" id="services"><p>Vente de livres de toutes sortes de catégories</p></div>
            </div>

            <div class="faq-item" onclick="toggleFAQ('inscription')">
                Comment m’inscrire
                <div class="faq-answer" id="inscription"><p>Pour vous inscrire sur le site web d'une boutique de livres en ligne, suivez ces étapes simples :

Accédez au site web de la boutique de livres : Ouvrez votre navigateur web et entrez l'adresse du site de la boutique de livres de votre choix dans la barre d'adresse.

Recherchez l'option d'inscription : La plupart des sites web ont un bouton "S'inscrire" ou "Créer un compte" situé généralement en haut à droite de la page d'accueil. Cliquez sur ce bouton.

Remplissez le formulaire d'inscription : Vous serez dirigé vers une page d'inscription où vous devrez fournir des informations personnelles. Cela peut inclure votre nom, prénom, adresse e-mail, numéro de téléphone, et parfois votre adresse de livraison. Assurez-vous de fournir des informations précises.

Créez un nom d'utilisateur et un mot de passe : Choisissez un nom d'utilisateur unique et créez un mot de passe sécurisé. Assurez-vous que votre mot de passe est assez fort, en combinant des lettres majuscules et minuscules, des chiffres et des caractères spéciaux.

Lisez et acceptez les conditions d'utilisation : Prenez le temps de lire les conditions d'utilisation et la politique de confidentialité du site. Assurez-vous de comprendre les termes et conditions, puis cochez la case d'acceptation si vous êtes d'accord.

Validez votre inscription : Cliquez sur le bouton "S'inscrire" ou "Créer un compte" pour finaliser votre inscription. Certaines boutiques enverront un e-mail de confirmation à l'adresse que vous avez fournie. Suivez les instructions de cet e-mail pour activer votre compte.

Connectez-vous : Une fois votre compte activé, retournez sur le site web de la boutique de livres et connectez-vous avec votre nom d'utilisateur et votre mot de passe.

Votre inscription est maintenant terminée, et vous pouvez commencer à parcourir le catalogue de la boutique, ajouter des livres à votre panier, et passer des commandes en ligne. N'oubliez pas de garder en sécurité vos informations d'identification, notamment votre mot de passe, pour protéger votre compte.</p></div>
            </div>

            <div class="faq-item" onclick="toggleFAQ('rabais')">
                Rabais
                <div class="faq-answer" id="rabais"><p>Certains rabais sont applicables, dépendament du livre</p></div>
            </div>
        </div>
    </main>

    <footer class="footerFAQ">
        
        <div>
            <a href="accueil_v2.php"><img src="../images/logo.png" alt="Boutique Livre Logo"  height="104px"></a></br>
            <br>
            2023-2023
        </div>
    </footer>

    <script>
        function toggleFAQ(id) {
            var answer = document.getElementById(id);
            var item = answer.parentElement;

            if (answer.style.maxHeight) {
                answer.style.maxHeight = null;
                item.classList.remove('active');
            } else {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                item.classList.add('active');
            }
        }
    </script>

</body>

</html>
