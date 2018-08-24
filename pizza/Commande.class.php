<?php


class Commande
{

	private $client = '';
	private $date;
	private $produits = [];
	private $regle = false;		// commande réglée



	public function __construct( $client )
	{
		$this->client = $client;
		$this->date = time();
	}


	/*
		Ajouter un produit à la commande
	*/
	public function ajouter( $produit, $quantite )
	{
		$ligne_commande = [
			'prod' => $produit,
			'qt' => $quantite
		];

		$this->produits[] =  $ligne_commande;
	}


	/*
		calculer le prix total
	*/
	private function prixTotal()
	{
		$total = 0;

		foreach( $this->produits as $p )
		{
			$total += $p['prod']->prix * $p['qt'];
		}
		return $total;
	}


	/*
		Génération HTML de la facture
	*/
	public function generer_facture()
	{
		echo '<div class="commande">';
		echo '<p>client : ' . $this->client . '</p>';
		echo '<p>date : ' . date('d/m/Y', $this->date) . '</p>';

		echo '<table>';

		foreach( $this->produits as $p )
		{
			echo '<tr><td>' . $p['prod']->nom . '</td><td>' . $p['qt'] . '</td></tr>';
		}

		echo '</table>';
		echo '<p>total : ' . $this->prixTotal() . '</p>';
		echo '</div>';
	}

}