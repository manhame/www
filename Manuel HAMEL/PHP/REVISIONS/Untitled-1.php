<h1>Révisions exos PHP série 1</h1>

<?php

$chaineCaracteres = "Notre formation DL commence aujourd'hui";

    echo "La phrase contient  " .strlen($chaineCaracteres)." caractères<br>";

$nbMots = str_word_count($chaineCaracteres);
    echo "La phrase contient  " .$nbMots." caractères<br>";

$replaceMot= str_replace("aujourd'hui", "demain", $chaineCaracteres,);
    echo $replaceMot."<br>"; //remplace "quoi", "par quoi", "dans quoi"

$chaineCaracteres1 = "Engage le jeu que je la gagne";
$minusculessansespace = str_replace(" ","",strtolower($chaineCaracteres1));
$inverse = strrev($chaineCaracteres1);
if ($minusculessansespace == $inverse) { //toujours double= après "if"
    echo "La phrase: " .$chaineCaracteres1. " est un palindrome<br>";
}   
    else {
    echo "La phrase: " .$chaineCaracteres1. " n'est pas un palindrome<br>";
    
    }
$valF = 100;
$change = 100/15.24;
$val€ = $valF/$change;
    echo $valF." Francs valent ".$val€." Euros<br>";

$puHT = 9.99;
$qté = 5;
$tva = 0.2;
$ptTTC = $puHT*$qté*(1+$tva);
    echo "Le prix de la facture à régler est de ".$ptTTC. " €<br>";

$ageEnfant = 12;
if($ageEnfant >=6 && $ageEnfant<=7) {
    echo "Votre catégorie est Poussin<br>";
} elseif(8<=$ageEnfant && $ageEnfant<=9) {
    echo "Votre catégorie est Pupille<br>";
} else {
    echo "Vous êtes hors catégorie<br>";
}

$tabmul = 8;
for($i=1; $i<=10; $i++) { //séparer par des ";"
        $resultat = $i*$tabmul;
        echo "$i*$tabmul = $resultat"."<br>";
}
$i = 1;
while($i <=10) {
    echo "$i*$tabmul = ".($i*$tabmul)."<br>";
    $i++;
}
foreach(range(1,10) as $i ) {
    echo "$i*$tabmul=".$i*$tabmul."<br>";
}

$sexe = "F";
$age = 19;
if(($sexe=="F" && (18<=$age && $age<=35)) || ($sexe=="H" && $age>=20)) {
    echo "Vous êtes imposable<br>";
} else {
    echo "Vous n'êtes pas imposable<br>";
}

$marques = ["Peugeot", "Renault", "BMW", "Audi"];
$nbMarques = count($marques);
echo "Il y a ".$nbMarques." marques dans le tableau<br>";
foreach($marques as $marque) {
    echo "$marque<br>"; //toujours mettre $...entre " dans "echo" contrairement aux fonctions()
}

$personnes = ["mickael"=>"FRA", "virgile"=>"ESP", "mary"=>"ENG"];
    ksort($personnes);
    foreach($personnes as $prenom => $langue) {
        if($langue == "FRA") {
        echo "Salut ".ucfirst($prenom)."<br>";
    }
    elseif($langue == "ESP") {
        echo "Hola ".$prenom."<br>";
    }
    elseif($langue == "ENG") {
        echo "Hi ".$prenom."<br>";
    }}




