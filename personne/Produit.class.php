<?php


/*


	Mon objet Produit peut être utiliosé avec les
	actions suivantes :

	get( $id)


*/
class Produit
{

	private $prix;
	private $nom;
	private $descriptif;



	public function get( $id_produit )
	{
		$sql = "SELECT * FROM produit
			WHERE id_produit = $id_produit;"

		$p = new PDO();
		$result = $p->query($sql);

		return $this->TTC($result->);
	}



	private function TTC( $ht )
	{
		return $ht * 1.2;
	}

}
