<?php
include_once("controleurs/controleur.abstract.class.php");
include_once("modele/DAO/cartDAO.class.php");
include_once("modele/cart.class.php");

class DoCart extends Controleur {
    private $cart;

    public function __construct() {
        parent::__construct();
        $this->cart = new Cart();
    }

    public function executeAction() {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'addCart':
                    return $this->addItem();
                case 'checkout':
                    return $this->checkout();
                case 'voircheckout':
                    return $this->voircheckout();
                default:
                    return "passercom";
            }
        }
    }

    private function addItem() {
        if (isset($_GET['bookNum']) && isset($_GET['quantity'])) {
            $bookNum = $_GET['bookNum'];
            $quantity = $_GET['quantity'];
            $this->cart->addItem($bookNum, $quantity);
        }
        return "passercom";
    }

    private function checkout() {
        $total = $this->cart->getTotal();
        CartDAO::inserer($total);
        $_SESSION['cart'] = []; 
    
        echo "<script>alert('Commande effectuée avec succès! Total: $" . number_format($total, 2) . "');</script>";
        echo "<script>window.location.href = 'vues/accueil_v2.php';</script>";
    }
    private function voircheckout() {
        return "passercom";
    }
}
?>