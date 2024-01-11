<h1>Application Livre</h1>

<?php

include "./Auteur.php";
include "./Livre.php";

// function chargerClasse($classe) {
//     require $classe.'.php';
// }
// spl_autoload_register('chargerClasse');

$a1 = new Auteur ("Stephen","King");

$l1 = new Livre ("Ca","1986",1138,20, $a1);
$l2 = new Livre ("Simetierre","1983",374,15, $a1);
$l3 = new Livre ("Le Fléau","1978",823,14, $a1);
$l4 = new Livre ("Shining","1977",447,16, $a1);

$a1->afficherLivres();





/*

$t1 = new Titulaire ("Prénom", "Nom", "02/04/1968", "Ville",['courant','epargne']);
//echo $t1 -> getInfos()."<br>";
echo $t1 -> getPrenom()." ".$t1 -> getNom()."<br>";
echo "né le ".$t1 -> getDateNaissance()."<br>";
echo "domicilié à ".$t1 -> getVille()."<br>";
echo "est titulaire des comptes suivants : ".$t1 -> getComptes();

/*
$c1 = new Compte ("Libellé", "Solde","Devise" ,"Titulaire" );
$c2 = new Compte ("Libellé", "Solde","Devise" ,"Titulaire" );
//echo $c1 -> getInfos()."<br>";
echo $c1 -> getLibelle()." solde : ".$c1 -> getSoldeInitial()." ".$c1 -> getDeviseMonetaire()."<br>";
echo $c1 -> getTitulaireUnique()."<br>";
echo $c2 -> getLibelle()." solde : ".$c2 -> getSoldeInitial()." ".$c2 -> getDeviseMonetaire()."<br>";
echo $c2 -> getTitulaireUnique()."<br>";

foreach (array($comptes,$c as $"libelle")) {
    echo $titulaireUnique." est titulaire de ce compte".$libelle;
} */
