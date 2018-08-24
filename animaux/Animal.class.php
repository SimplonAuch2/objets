<?php


class Animal
{
	public $espece;
	public $regime;				// vegeratien' ou 'carnivore'
	public $picto = 'cow.png';

	public $naissance;			// date de naissance
	public $longevite;			// esperance de vie (20% de récision défini à la naissance)

	public $reserves = 50;		// Réserve de nourriture (0 = mort ; 100 = mort)
	public $sante = 100;		// 100 = bonne santé ; 0 = mort



	/*
		Création d'une instance = naissance
		On doit donc définir la position, 
	*/
	public function __construct( $longevite=10 )
	{
		$this->naissance = time();

		$lmin = $longevite - ( $longevite*20/100 );
		$lmax = $longevite + ( $longevite*20/100 );
		$this->longevite = rand( $lmin, $lmax );

	}

	/*
		Quand un carnivore ingère un herbivore, 
		ce sont la moitié des réserves du mangé qui sont transférées au mangeur.
		Un herbivore ne mange pas : si il essaie de manger un animal, 
		il perd de la santé !
	*/
	public function manger( Animal $a)
	{
		if( $this->regime == 'carnivore' )
		{
			$a->mourrir();
			$this->reserves += $a->reserves / 2;	
		}
		else
		{
			$this->sante -= 10;	// vache folle !
		}
	}


	public function mourrir()
	{
		$this->sante = 0;
	}


	public function afficher()
	{
		if( $this->sante != 0 )
		{
			print '<img src="assets/png/' . $this->picto . '" />';
		}
		else
		{
			print '<img src="assets/png/' . $this->picto . '" class="dead" />';
		}
	}

	public function debug()
	{
		print '<textarea style="min-width: 400px; min-height:300px;">';
		print_r( $this );
		print '</textarea>';
	}
}







