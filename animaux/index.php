<?php

ini_set('display_errors', 1);

require 'Animal.class.php';
require 'Chien.class.php';
require 'Chat.class.php';
require 'Poulet.class.php';



$ouaf = new Chien();
$miaou = new Chat();
$poulet = new Poulet();




?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

	/*
		mouse
		fox
		sheep > wolf
		cow > wolf
	*/

	$ouaf->manger( $poulet );
	$ouaf->aboyer();

	$ouaf->afficher();
	$miaou->miauler();
	$miaou->afficher();
	$poulet->afficher();

	echo '<br/>';

	$ouaf->debug();
	$miaou->debug();
	$poulet->debug();

	?>


</body>
</html>