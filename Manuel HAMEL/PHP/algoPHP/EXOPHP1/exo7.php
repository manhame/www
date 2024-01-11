<h1>Exercice 7</h1>

<p>renvoyer categorie enfant en fonction de l'age</p>

<?php

$age = 10;

if ($age>=6 and $age<=7) {
    echo "L'enfant qui a $age ans appartient à la catégorie 'Poussin'";
}
elseif ($age >=8 and $age<=9) {
    echo "L'enfant qui a $age ans appartient à la catégorie 'Pupille'";
}
elseif ($age >=10 and $age<=11) {
    echo "L'enfant qui a $age ans appartient à la catégorie 'Minime'";
}
elseif ($age >=12) {
    echo "L'enfant qui a $age ans appartient à la catégorie 'Cadet'";
}
elseif ($age <6) {
    echo "L'enfant qui a $age ans est 'Hors categorie'";
}

?>

