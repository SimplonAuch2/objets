<?php

ini_set('display_errors', 1);

require 'carte.inc.php';

require 'Pizza.class.php';
require 'Boisson.class.php';



// Le client achète UNE pizza, et UNE boisson de chaque type, quel gourmand !

$commande = [];

foreach( $pizzas as $p )
{
	$commande[] = new Pizza( $p[0], $p[1], $p[2], $p[3] );
}

foreach( $boissons as $p )
{
	$commande[] = new Boisson( $p[0], $p[1], $p[2] );
}





?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Voici la commande du client</h2>

	<table>	
		<?php foreach($commande as $c): ?>


			<?= $c->html() ?>

		<?php endforeach; ?>
	</table>

</body>
</html>
