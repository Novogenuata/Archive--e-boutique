<?php

// Classe représentant un produit pour vente dans un commerce
class Livre {
	private $numero;
	private $titre;
	private $auteur;
	private $description;
	private $date_publication;
	private $nbr_pages;
    private $editeur;
    private $edition;
    private $isbn10;
    private $isbn13;
    private $prix;
    private $categorie;
    private $label;
    private $chemin_img;
    private $quantite;

    
    public function __construct($numero, $titre, $auteur, $description, $date_publication, $nbr_pages, $editeur, $edition, $isbn10, $isbn13, $prix, $categorie, $label, $chemin_img, $quantite) {
        $this->numero = $numero;
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->description = $description;
        $this->date_publication = $date_publication;
        $this->nbr_pages = $nbr_pages;
        $this->editeur = $editeur;
        $this->edition = $edition;
        $this->isbn10 = $isbn10;
        $this->isbn13 = $isbn13;
        $this->prix = $prix;
        $this->categorie = $categorie;
        $this->label = $label;
        $this->chemin_img = $chemin_img;
        $this->quantite = $quantite;
    }

    
    public function getNumero() {return $this->numero;}

    public function getTitre() {return $this->titre;}

    public function getAuteur() {return $this->auteur;}

    public function getDescription() {return $this->description;}

    public function getDatePublication() {return $this->date_publication;}

    public function getNbrPages() {return $this->nbr_pages;}

    public function getEditeur() {return $this->editeur;}

    public function getEdition() {return $this->edition;}

    public function getIsbn10() {return $this->isbn10;}

    public function getIsbn13() {return $this->isbn13;}

    public function getPrix() {return $this->prix;}

    public function getCategorie() {return $this->categorie;}

    public function getLabel() {return $this->label;}

    public function getCheminImg() {return $this->chemin_img;}

    public function getQuantite() {return $this->quantite;}

    
    public function setNumero($numero) {$this->numero = $numero;}

    public function setTitre($titre) {$this->titre = $titre;}

    public function setAuteur($auteur) {$this->auteur = $auteur;}

    public function setDescription($description) {$this->description = $description;}

    public function setDatePublication($date_publication) {$this->date_publication = $date_publication;}

    public function setNbrPages($nbr_pages) {$this->nbr_pages = $nbr_pages;}

    public function setEditeur($editeur) {$this->editeur = $editeur;}

    public function setEdition($edition) {$this->edition = $edition;}

    public function setIsbn10($isbn10) {$this->isbn10 = $isbn10;}

    public function setIsbn13($isbn13) {$this->isbn13 = $isbn13;}

    public function setPrix($prix) {$this->prix = $prix;}

    public function setCategorie($categorie) {$this->categorie = $categorie;}

    public function setLabel($label) {$this->label = $label;}

    public function setCheminImg($chemin_img) {$this->chemin_img = $chemin_img;}

    public function setQuantite($quantite) {$this->quantite = $quantite;}


	public function ajouterAuStock($quantiteAjoutee) {
		$this->quantite+=$quantiteAjoutee;
	}
	public function enleverDuStock($quantiteEnlevee) {
		$this->quantite-=$quantiteEnlevee;
	}
	public function changer_prix_pct($pourcentage) {
		$changement=$pourcentage/100.0*$this->prix;
		$this->prix+=$changement;
	}
    public function changerLabel($nouveauLabel){
        $this->label = $nouveauLabel;
    }	
}
?>






