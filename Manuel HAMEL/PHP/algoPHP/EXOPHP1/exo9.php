<h1>Exercice 9</h1>

<p>Savoir si une personne est imposable</p>

<?php

$age = 22;
$sexe = "H";

echo "Age =  $age <br>";
echo "Sexe = $sexe <br>";

$condition1 = ($sexe == "F" && $age >=18 && $age<=35);
$condition2 = ($sexe == "H" and $age > 20);

if ($condition1 || $condition2) {
    echo "imposable <br>";
}
else {
    echo "non imposable <br>";
}

?>


