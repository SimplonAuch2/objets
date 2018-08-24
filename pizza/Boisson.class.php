<?php



class Boisson
{

	private $nom = '';
	private $prix = 0;
	private $contenance = 0;


	public function __construct( $nom, $prix, $contenance )
	{
		$this->nom = $nom;
		$this->prix = $prix;
		$this->contenance = $contenance;
	}

	public function html()
	{
		echo '<div class="' . get_class($this) . '">'  . $this->nom . '</div>';
	}

}