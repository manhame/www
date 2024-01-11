<h1>Exercice 11</h1>

<p>Tableau marques de vehicules</p>
<?php

$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];

$nbreMarques = count($marques);

echo " Il y a $nbreMarques marques de voitures dans le tableau : <br>" ;

foreach($marques as $marque) {
    echo "$marque<br>";
}

for($i = 0; $i < $nbreMarques; $i++) {
    echo $marques[$i]."<br>";
}

$i = 0;
while($i < $nbreMarques) {
    echo $marques[$i]."<br>";
    $i++;
}

?>