<?php
ini_set('display_errors', 1);
require_once "Personne.class.php";



//echo Personne::espece();



$p1 = new Personne( "Aurélien", "Chirot", 1981 );
$p2 = new Personne( "Marcel", "Orchestre", 1910 );


$p1->dire( $p2, "Hey, ca gazze ?" );


//var_dump( $p1 );
//var_dump( $p2 );


