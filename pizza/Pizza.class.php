<?php



class Pizza
{

	private $nom = '';
	private $base = '';		// tomate ou crème fraiche
	private $pate = '';		// épaisseur de la pâte
	private $prix = 0;
	private $etat = '';		// états : 'fabrication', 'prête', 'livrée'
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


	public function livraison()
	{
		$this->etat = 'prête';
	}


	public function html()
	{
		echo '<div class="' . get_class($this) . '">'  . $this->nom . '</div>';
	}

}