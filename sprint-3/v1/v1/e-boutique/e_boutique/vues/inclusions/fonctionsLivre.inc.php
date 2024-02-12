<?php

function afficherMenu($tableau,$indiceOptionActive) {
	echo "<ul>";
	$i=0;
	foreach ($tableau as $itemMenu => $lien) {
		$classe="";
		if ($indiceOptionActive==$i) {
			$classe=" class='option_active'";
		}
		echo "<li $classe><a href='$lien'>$itemMenu</a></li>";
		$i++;
	}
	echo "</ul>";
}


// #3 : Utilisez les méthodes de la classe Automobile 
//       pour afficher le modèle, la couleur et le prix final dans un liste umask    
function afficherLivre($unLivre) {
	echo "<ul>";
	echo "<li>Titre :".$unLivre->getTitre()."</li>";
	echo "</ul>";
}

// #4 : Utilisez les méthodes de la classe Accessoire 
//       pour afficher le code, la quanite, et le nom 
//       de chaque accessoire du tableau reçu dans une table html_entity_decode    
function afficherTabeLivres($unTableau) {
	// ... Début de la table
	echo "<table>";
	// ... Entête de la table 
	echo "<thead>";
	echo "<tr>";
	echo "<th>code</th>";
	echo "<th>Description</th>";
	echo "<th>Prix unitaire</br>suggéré</th>";
	echo "<th>Photo</th>";
	echo "</tr>";
	echo "</thead>";
	// ... Body de table 
	// ******************** à compléter : doit afficher les éléments de $unTableau 

	echo "<tbody>";
	foreach ($unTableau as $unLivre) {
		echo "<tr>";
		echo "<td>".$unLivre->getTitre()."</td>";	
		echo "</tr>";	
	}
	echo "</body>";
	// *******************
	// ... Fin de la table
 	echo "</table>";
}

?>