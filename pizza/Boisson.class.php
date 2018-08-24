<?php



class Boisson extends Produit
{
	private $contenance = 0;


	public function __construct( $nom, $prix, $contenance )
	{
		$this->nom = $nom;
		$this->prix = $prix;
		$this->contenance = $contenance;
	}

}