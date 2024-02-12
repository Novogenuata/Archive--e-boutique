<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .grid-item2COM{
            margin-right: 20px;
            display: inline-block;
        }
        .logoCom{
            float: left;
        }
        header{
            display: inline;
            justify-content: center;
        }
    </style>
</head>
<body class="bodyCOM">

<script>
function updateQuantity(bookNum, change) {
    console.log("Updating quantity for book:", bookNum, "Change:", change);
    let currentQuantityElement = document.getElementById('quantity_' + bookNum);
    if (!currentQuantityElement) {
        console.error("Element not found: quantity_" + bookNum);
        return;
    }
    let currentQuantity = parseInt(currentQuantityElement.value);
    currentQuantity += change;
    if (currentQuantity < 1) currentQuantity = 1;
    currentQuantityElement.value = currentQuantity;
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log("Request successful, reloading page");
            window.location.reload();
        }
    };
    xhr.open("GET", "index.php?action=add&bookNum=" + bookNum + "&quantity=" + currentQuantity, true);
    xhr.send();
}
</script>
<?php
$cart = new Cart();
$totalBeforeTaxes = $cart->getTotal();
$totalAfterTaxes = $cart->getTotalWithTaxes(15);
?>




    <header class="headerCOM">
        
        <a href="vues/accueil_v2.php" class="logoCom"><div><img src="images/logo.png" alt="image logo"></div></a>
        <h1>Passer la commande</h1>
    </header>

    <main class="mainCOM">
        <div class="grid-itemCOM">
            <p>Adresse de livraision: <br></p>

            <p><form action="/action_page.php">
                <label for="add">Ajouter l'adresse:</label>
                <input type="text" id="add" name="add">
                </form>   <br></p>
            <p>Estimation du temps de livraison      ex : 10 jours </p>

            
        </div>
        <div class="grid-item1COM">
            <div class="separationCOM">
            <?php 
            echo "Total avant taxes: $" . number_format($totalBeforeTaxes, 2);
            ?>
            <br>

            Rabais : 0$
            <br>
            Livraison : 0$
            <br>
            Taxes applicables à votre région : 15%
            <br>
            <?php 
            echo "Total après taxes: $" . number_format($totalAfterTaxes, 2);
            ?>
            </div>
          

            <a href="index.php?action=checkout"><div class="bottomCOM"> <button class="commande-buttonCOM">Passer ma commande</button></div></a>
            </div>
            <div class="grid-item2COM">
        <?php
        foreach ($_SESSION['cart'] as $bookNum => $quantity) {
            $livre = LivreDAO::chercher($bookNum);
            if ($livre != null) {
                echo "<div class='contentCOM'>";
                echo "<div class='titreCOM'>";
                echo "<img src='" . htmlspecialchars($livre->getCheminImg()) . "' height='100px'>";
                echo htmlspecialchars($livre->getTitre()) . "<br>";
                echo htmlspecialchars($livre->getAuteur()) . "<br>";
                echo htmlspecialchars($livre->getPrix()) . "$";
                echo "</div>";
                echo "<div class='quantiteCOM'>";
                echo "Quantité<br>";
                echo "<button type='button' class='btn btn-dark' onclick='updateQuantity(\"$bookNum\", 1)'>+</button>";
                echo " <input type='text' id='quantity_$bookNum' value='" . htmlspecialchars($quantity) . "' style='width: 50px;'>";
                echo " <button type='button' class='btn btn-dark' onclick='updateQuantity(\"$bookNum\", -1)'>-</button>";
                echo "</div></div>";
                echo "<br>";
                echo "<br>";
            }
        }
        ?>
    </div>
        <div class="grid-item3COM"> Mode de paiement</div>
 
    </main>

    <footer class="footerCOM">
        <a href="vues/accueil_v2.php">
            <img src="images/logo/logo_livre.png" alt="" height="120px" >
        </a>
      
       <a href="FAQ.html">Besoin d'aide?</a> <br> <br> 2023-2023
    </footer>

</body>
</html>
