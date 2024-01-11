<!DOCTYPE html>

<p> "exercice 8 table multiplication"</p>
<body>


<?php

$table= 9;

// méthode avec un FOR
for ($i=1; $i<=10; $i++) {
    $resultat = $table * $i;
    echo "$table x $i = $resultat<br>";
}

// méthode avec un FOREACH
foreach (range(1,10) as $i) {
    $resultat = $table * $i;
    echo "$table x $i = $resultat<br>";
}

// méthode avec un WHILE
$i = 1;
while($i <= 10) {
    $resultat = $table * $i;
    echo "$table x $i = $resultat<br>";
    $i++;
}




?>
