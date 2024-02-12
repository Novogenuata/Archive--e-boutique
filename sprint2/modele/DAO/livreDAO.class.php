<?php
	include_once("DAO.interface.php");
	include_once("modele/livre.class.php");

	class LivreDAO implements DAO {	
	
		
		public static function chercher($cles) { 
			// obtenir la connexion
			try {
                $connexion=ConnexionBD::getInstance();

			} catch(Exception $e){

                throw new Exception("Impossible de se connecter à la BD");
			}

			
			$unLivre=null;
			
		    $requete = $connexion->prepare("SELECT * FROM livre WHERE numero=? ");
			
			$requete->execute(array($cles));
			
              if($requete->rowCount()!=0){
                 $enr=$requete->fetch();
				 $unLivre = new Livre($enr['numero'], $enr['titre'],$enr['auteur'], $enr['description'], $enr['date_publication'], $enr['nbr_pages'], $enr['editeur'], $enr['edition'], $enr['isbn10'], $enr['isbn13'], $enr['prix'], $enr['categorie'], $enr['label'], $enr['chemin_img'], $enr[quantite]);
			  }
			
			$requete->closeCursor();
			
			
			ConnexionBD::close();

			
			return $unLivre;

		} 
		
		
		static public function chercherTous() { 
			return self::chercherAvecFiltre("");
		} 
		
		
		static public function chercherAvecFiltre($filtre){ 
			try {
                $connexion=ConnexionBD::getInstance();

			} catch(Exception $e){

                throw new Exception("Impossible de se connecter à la BD");
			}

			$tableau=[];
         
         $requete = $connexion->prepare("SELECT * FROM livre " .$filtre);
		  
		   $requete->execute();
		   foreach($requete as $enr){
			$unLivre = new Livre($enr['numero'], $enr['titre'],$enr['auteur'], $enr['description'], $enr['date_publication'], $enr['nbr_pages'], $enr['editeur'], $enr['edition'], $enr['isbn10'], $enr['isbn13'], $enr['prix'], $enr['categorie'], $enr['label'], $enr['chemin_img'], $enr[quantite]);

			
			 array_push($tableau,$unLivre);

		   }

		   
			$requete->closeCursor();
			
			ConnexionBD::close();

			return $tableau;
			
			
		} 

		static function inserer($unLivre){ 
			
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible de se connecter à la BD."); 
			}
		
			$requete= $connexion->prepare("INSERT INTO livre (numero, titre, auteur, description, date_publication, nbr_pages, editeur, edition, isbn10, isbn13, prix, categorie, label, chemin_img, quantite) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        
			
			$tableauInfos =[$unLivre->getNumero(),$unLivre->getTitre(),$unLivre->getAuteur(),$unLivre->getDescription(),$unLivre->getDatePublication(),$unLivre->getNbrPages(), $unLivre->getEditeur(), $unLivre->getEdition(), $unLivre->getIsbn10(), $unLivre->getIsbn13(), $unLivre->getPrix(), $unLivre->getCategorie(), $unLivre->getLabel(), $unLivre->getCheminImg(), $unLivre->getQuantite()];
			 return $requete->execute($tableauInfos);

		}

		static public function modifier($unLivre) {
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible de se connecter à la BD."); 
			}
			
			$requete=$connexion->prepare("UPDATE livre SET titre=?, auteur=?, description=?, date_publication=?, nbr_pages=?, editeur=?, edition=?, isbn10=?, isbn13=?, prix=?, categorie=?, label=?, chemin_img=?, quantite=? WHERE code=?");

			
			$tableauInfos =[$unLivre->getNumero(),$unLivre->getTitre(),$unLivre->getAuteur(),$unLivre->getDescription(),$unLivre->getDatePublication(),$unLivre->getNbrPages(), $unLivre->getEditeur(), $unLivre->getEdition(), $unLivre->getIsbn10(), $unLivre->getIsbn13(), $unLivre->getPrix(), $unLivre->getCategorie(), $unLivre->getLabel(), $unLivre->getCheminImg(), $unLivre->getQuantite()];
			 return $requete->execute($tableauInfos);

		}
	
		static public function supprimer($unLivre){
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible de se connecter à la BD."); 
			}
			
             $requete=$connexion->prepare("DELETE FROM livre WHERE numero=?");
			
			$tableauInfos=[$unLivre->getNumero()];
			return $requete->execute($tableauInfos);


		}
	}
	
?>