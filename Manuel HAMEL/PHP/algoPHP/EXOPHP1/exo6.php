<h1>Exercice 6</h1>

<p>calcul d'une facture</p>

<?php

$nbrART = 5;
$puHT = 9.99;
$txTVA = 0.2;
$facTTC = $nbrART * $puHT * (1+$txTVA);

echo "Prix unitaire de l'article :  $puHT € <br>";
echo "Quantité : $nbrART <br>";
echo "Taux de TVA : $txTVA <br>";
echo "Le montant de la facture à régler est de : $facTTC €";

?>

