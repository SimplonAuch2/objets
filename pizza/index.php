<?php
ini_set('display_errors', 1);

require 'carte.inc.php';

require 'Produit.class.php';
require 'Pizza.class.php';
require 'Boisson.class.php';
require 'Commande.class.php';



/*
	La carte du resto est constituée d'un produit de chaque
*/

$carte = [];

foreach( $pizzas as $p )
{
	$carte[] = new Pizza( $p[0], $p[1], $p[2], $p[3] );
}

foreach( $boissons as $p )
{
	$carte[] = new Boisson( $p[0], $p[1], $p[2] );
}

/*
	Une commande client
*/

$commande = new Commande('Orel');

$commande->ajouter( new Pizza("4 fromages","tomate",9,"fine"), 1 );
$commande->ajouter( new Pizza("tartiflette","crème fraiche",9,"épaisse"), 1 );
$commande->ajouter( new Boisson("bière",2.5,25), 2 );



?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Carte du restaurant</h2>

	<?php

		foreach($carte as $c)
		{
			echo $c->html();
		}

	?>



	<h2>Commande client</h2>

	<?php
		$commande->generer_facture();

	?>


</body>
</html>
