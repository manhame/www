<h1>Exercice 13</h1>

<p>moyenne des notes d'un eleve</p>

<?php

$notes = [10,12,8,19,3,16,11,13,9];
$nbrNotes = count ($notes);
$sommeNotes = array_sum ($notes);
$moyenne = round (($sommeNotes/$nbrNotes),2);

// boucle qui affiche les notes : foreach

echo "Les notes obtenues par l'élève sont : <br>";

foreach ($notes as $note) {
    echo "$note <br>" ;
}

for ($i=0; $i<$nbrNotes; $i++) {
    echo $notes[$i]. "<br>";
}

$i=0;
while ($i<$nbrNotes) {
    echo $notes[$i]. "<br>";
    $i++;
}

echo "Sa moyenne generale est donc de $moyenne <br>";

?>

