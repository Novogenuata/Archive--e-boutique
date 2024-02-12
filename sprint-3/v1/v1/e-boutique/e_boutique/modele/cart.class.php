<?php


class Cart {
    public function __construct() {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
    }

    public function addItem($bookNum, $quantity = 1) {
        if (!isset($_SESSION['cart'][$bookNum])) {
            $_SESSION['cart'][$bookNum] = 0;
        }
        $_SESSION['cart'][$bookNum] += $quantity;
    }

    public function getTotal() {
        $total = 0;
        foreach ($_SESSION['cart'] as $bookNum => $quantity) {
            
            $livre = LivreDAO::chercher($bookNum);
            $price = $livre->getPrix();
            $total += ($price * $quantity);
        }
        return $total;
    }
    public function calculateTaxes($percentage) {
        $total = $this->getTotal();
        return $total * ($percentage / 100);
    }

    public function getTotalWithTaxes($percentage) {
        $total = $this->getTotal();
        $taxes = $this->calculateTaxes($percentage);
        return $total + $taxes;
    }

    
}
?>