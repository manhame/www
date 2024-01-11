<h1>Exercice 2</h1>

<p>compter nbr mots d'une phrase</p>

<?php

$phrase = "Notre formation DL commence aujourd'hui";

$nbrMots = str_word_count ($phrase);

echo "La phrase $phrase contient $nbrMots mots <br>";
?>
