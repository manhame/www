<?php

class Livre {
    private string $_titre;
    private int $_nbPages;
    private int $_anneeParution;
    private float $_prix;
    private Auteur $_auteur;

public function __construct($titre,$anneeParution,$nbPages,$prix, Auteur $auteur) {
    $this -> _titre=$titre;
    $this -> _nbPages=$nbPages;
    $this -> _anneeParution=$anneeParution;
    $this -> _prix=$prix;
    $this->_auteur = $auteur;

    $this->_auteur->ajouterLivre($this);
}

public function getTitre () {
    return $this -> _titre;
}
public function getNbPages () {
    return $this -> _nbPages;
}
public function getAnneeParution () {
    return $this -> _anneeParution;
}
public function getPrix () {
    return $this -> _prix;
}
/*public function getAuteur() {
    return $this->_auteur;
}*/
public function getInfos () {
    return $this -> _titre."  (".$this ->_anneeParution.") : ".$this -> _nbPages." pages / ".$this -> _prix." €";
}

public function setTitre (string $titre) {
    $this -> _titre= $titre;
}
public function setNbPages (int $nbPages) {
    $this -> _nbPages= $nbPages;
}
public function setAnneeParution (string $anneeParution) {
    $this -> _anneeParution= $anneeParution;
}
public function setPrix (int $prix) {
    $this -> _prix= $prix;
}}
