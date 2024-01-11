<h1>Exercice 3</h1>

<p>remplacer un mot par un autre dans une phrase</p>

<?php

$str = "Notre formation DL commence aujourd'hui";

echo "$str <br>";
echo str_replace ("aujourd'hui", "demain", $str) // n'acceptait pas de <br> à la fin ?

?>