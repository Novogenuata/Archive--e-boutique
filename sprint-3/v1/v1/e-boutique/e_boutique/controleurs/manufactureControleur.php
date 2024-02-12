<?php
include_once("controleurs/defaut.class.php");
include_once("controleurs/controleurVoirLivrePolicier.php");
include_once("controleurs/controleurVoirUnLivre.php");
include_once("controleurs/controleurDoCart.php");

class Manufacture
{

	public static function creerControleur($action)
	{
		$controleur = null;
		if ($action=="voirLivresPolicier") {
			$controleur = new VoirLivrePolicier();
		} elseif ($action=="VoirUnLivre") {
			$controleur = new VoirUnLivre();
		}
		elseif ($action=="addCart" || $action== "checkout" || $action== "voircheckout") {
			$controleur = new DoCart();
		}
		 else {
			$controleur = new Defaut();
		}

		return $controleur;
	}
}
?>