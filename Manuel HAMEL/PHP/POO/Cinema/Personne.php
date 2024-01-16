<?php


class Personne {
    protected string $_prenom;
    protected string $_nom;
    protected string $_sexe;
    protected DateTime $_dateNaissance;

    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance) {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = new DateTime ($dateNaissance);
    }

    public function getPrenom() {
        return $this->_prenom;
    }
    public function getNom() {
        return $this->_nom;
    }
    public function getSexe() {
        return $this->_sexe;
    }
    public function getDateNaissance() {
        return $this->_dateNaissance;
    }
    public function __toString() {  //permet de simplifier le code à "this" dans les classes liées
        return $this->getPrenom()." ".$this->getNom()." <br>";
    }

    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    }
    public function setNom(string $nom) {
        $this->_nom = $nom;
    }
    public function setSexe(string $sexe) {
        $this->_sexe = $sexe;
    }
    public function setDateNaissance(dateTime $dateNaissance) {
        $this->_dateNaissance = $dateNaissance;
    }
}