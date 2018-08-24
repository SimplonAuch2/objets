<?php

class Personne
{

	public $nom;
	public $prenom;
	private $anniversaire;

	public $on_ma_dit = [];



	public function __construct( $p, $n, $a )
	{
		$this->prenom = $p;
		$this->nom = $n;
		$this->anniversaire = $a;

		echo "Bonjour " . $p . " !<br/>";
	}


	public static function espece()
	{
		return "humain";
	}


	public function manger()
	{
		return $this->prenom . " mange bien !";
	}


	public function dire( $personne, $message )
	{
		$info = [
			"qui" => $this->prenom,
			"quand" => time(),
			"msg" => $message
		];

		$personne->on_ma_dit[] = $info;
	}


}
