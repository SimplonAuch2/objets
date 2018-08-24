<?php



class Pizza extends Produit
{

	private $base = '';		// tomate ou crème fraiche
	private $pate = '';		// épaisseur de la pâte

	private $ingredients = [];


	public function __construct( $nom, $base, $prix, $epaisseur )
	{
		$this->nom = $nom;
		$this->base = $base;
		$this->prix = $prix;
		$this->epaisseur = $epaisseur;

		$this->etat = 'fabrication';
	}


	public function cuire()
	{
		$this->etat = 'prête';
	}

	public function livrer()
	{
		$this->etat = 'livrée';
	}

}