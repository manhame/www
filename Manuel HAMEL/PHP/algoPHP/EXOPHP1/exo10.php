<!DOCTYPE html>

<p> "exercice 10 Rendu de monnaie en nombre de billets"</p>
<body>


<?php

echo "rendu de monnaie : ";

$apayer = 152;
$verse = 200;
$rendu = $verse-$apayer;

$nbr10 = floor ( $rendu / 10 );
echo "$nbr10 billets de 10 € -";

$reste1 = $rendu - ($nbr10 * 10) ;

$nbr5 = floor ($reste1 / 5 ) ;
echo "$nbr5 billet de 5 € -" ;

$reste2 = $reste1 - ($nbr5 * 5) ;

$nbr2 = floor ($reste2 / 2 ) ;
echo "$nbr2 pièce de 2 € -" ;

$reste3 = $reste2 - ($nbr2 * 2) ;

$nbr1 = floor ($reste3) ;
echo "$nbr1 pièce de 1 € <br>" ;