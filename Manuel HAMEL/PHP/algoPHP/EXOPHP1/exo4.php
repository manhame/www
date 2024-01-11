<h1>Exercice 4</h1>

<p>palindrome</p>

<?php

$phrase = "Engage le jeu que je le gagne";
$phraseMin = strtolower($phrase);
$phraseMinEspaces = str_replace(" ", "", $phraseMin);
$inverse = strrev ($phraseMinEspaces);

// $test = strrev(str_replace(" ", "", strtolower($phrase)));

// echo $inverse;

if ($phraseMinEspaces == $inverse) {
    echo "La phrase $phrase est un palindrome <br> ";
} else {
    echo "La phrase $phrase n'est pas un palindrome <br> ";
}


?>
