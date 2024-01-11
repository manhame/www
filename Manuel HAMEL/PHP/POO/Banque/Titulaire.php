<h1>Organisation classe Titulaire</h1>

<?php

class Titulaire {
    private string $_prenom;
    private string $_nom;
    private string $_dateNaissance;
    private string $_ville;
    //private array $_comptes;

public function __construct($prenom, $nom, $dateNaissance, $ville) {
    $this -> _prenom= $prenom;
    $this -> _nom= $nom;
    $this -> _dateNaissance= $dateNaissance;
    $this -> _ville= $ville;
   // $this -> _comptes= $comptes;
} 
/*
public function age($dateNaissance) {
    $this -> _dateNaissance = date_diff(date_create($dateNaissance),date_create("d/m/Y",time()));
}*/

public function getPrenom() {
    return $this -> _prenom;
}
public function getNom() {
    return $this -> _nom;
}
public function getDateNaissance() {
    return $this -> _dateNaissance;
}
public function getVille() {
    return $this -> _ville;
}
/*public function getComptes() {
    return $this -> _comptes;
}*/

public function setPrenom (string $prenom) {
    $this -> _prenom= $prenom;
}
public function setNom (string $nom) {
    $this -> _nom= $nom;
}
public function setDateNaissance (string $dateNaissance) {
    $this -> _dateNaissance = date_diff(date_create($dateNaissance),date_create("d/m/Y",time()));
}
public function setVille (string $ville) {
    $this -> _ville= $ville;
}}

$t1 = new Titulaire("Manuel","HAMEL","02/04/1968","Sarrebourg");
echo $t1 -> getDateNaissance();

//echo $t1 -> age($dateNaissance);
/*public function setComptes (array $comptes) {
    $this -> _comptes= $comptes;
}*/

/*
public function getInfos() {
    return $this ->_prenom." ".$this ->_nom." ".$this ->_(date_diff).$this ->_ville."<br>";
}    

}}
$this -> _format("%y ans");
*/