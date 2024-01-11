<h1>Organisation classe Compte</h1>

<?php
class Compte {
    private string $_libelle;
    private int $_soldeInitial;
    private string $_deviseMonetaire;
    private string $_titulaireUnique;
    private static $_nbComptes;

public function __construct($libelle,$soldeInitial,$deviseMonetaire,$titulaireUnique) {
    $this -> _libelle=$libelle;
    $this -> _soldeInitial=0;
    $this -> _deviseMonetaire=$deviseMonetaire;
    $this -> _titulaireUnique=$titulaireUnique;
    self::$_nbComptes++;
}

public function getLibelle () {
    return $this -> _libelle;
}
public function getSoldeInitial () {
    return $this -> _soldeInitial;
}
public function getDeviseMonetaire () {
    return $this -> _deviseMonetaire;
}
public function getTitulaireUnique () {
    return $this -> _titulaireUnique;
}
public function getInfos () {
    return $this ->_libelle." ".$this ->_soldeInitial." ".$this ->_deviseMonetaire." ".$this ->_titulaireUnique."<br>";
}

public function setLibelle (string $libelle) {
    $this -> _libelle= $libelle;
}
public function setSoldeInitial (int $soldeInitial) {
    $this -> _soldeInitial= $_soldeInitial;
}
public function setDeviseMonetaire (string $deviseMonetaire) {
    $this -> _deviseMonetaire= $deviseMonetaire;
}
public function setTitulaireUnique (string $titulaireUnique) {
    $this -> _titulaireUnique= $titulaireUnique;
}

public function crediter($credit) {
    $this -> _soldeInitial += $credit;
}
public function debiter($debit) {
    $this -> _soldeInitial -= $debit;
} 
public function virer($virement) {
    $this -> _soldeInitial -= $debit;
} 
}


$c1= new Compte ("courant","","€","x");
echo $c1 -> getInfos();
$c1 -> crediter(100);
echo $c1 -> getSoldeInitial()."<br>";
$c1 -> debiter(60);
echo $c1 -> getSoldeInitial()."<br>";
$c2= new Compte ("épargne","","€","X");
echo $c2 -> getInfos();
$c1 -> debiter(40);
$c2 -> crediter(40);
echo "le nouveau solde du compte ".$c2 -> getLibelle()." est de ".$c2 -> getSoldeInitial(). " €";

