<!DOCTYPE html>

<p> "exercice 12 tableau clé-valeur"</p>
<body>


<?php

$tableau = array ("Mickael" => "FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG");

ksort ($tableau) ;

foreach ($tableau as $prenom => $langue) {

if ($langue == "FRA") {
    echo "Salut $prenom <br>";
}

elseif ($langue == "ESP") {
    echo "Hola" .$prenom. "<br>";
}

elseif ($langue == "ENG") {
    echo "Hello $prenom <br>";

    
}} 

// classer par ordre alpha dans le tableau avant




?>

</body>
</html>





