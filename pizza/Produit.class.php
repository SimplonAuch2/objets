<?php



class Produit
{

	public $nom = '';
	private $etat = '';		// états : 'fabrication', 'prête', 'livrée'




	public function html()
	{
		echo '<div class="' . get_class($this) . '">'  . $this->nom . '</div>';
	}

}