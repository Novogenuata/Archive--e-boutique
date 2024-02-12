<?php
include_once("controleurs/controleurVoirLivre.class.php");

class Manufacture
{

	public static function creerControleur($action)
	{
		$controleur = null;
		if ($action=="voirLivre") {
			$controleur = new VoirLivre();
		} elseif ($action=="choisirProduit"){
			$controleur = new ChoisirLivre();
		} else {
			$controleur = new AccueilDefaut();
		}
		
		
		

		


		return $controleur;
	}
}
