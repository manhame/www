<?php

class Role {

    private string $_nomPersonnages;
    private array $_castings; // acteurs + films

    public function __construct(string $nomPersonnage) {
        $this->_nomPersonnages = $nomPersonnage;
        $this->_castings = [];
    }
    public function getNomPersonnages() {
        return $this->_nomPersonnages;
    }
    public function getCasting() {
        return $this->_castings;
    }
        public function setNomPersonnages(string $nomPersonnage) {
        $this->_nomPersonnages = $nomPersonnage;
    }
    // afficher les acteurs + films
    public function ajouterCasting(Casting $casting) {
        $this->_castings[] = $casting; //on alimente l'objet "_castings" tableau vide élément par élément
    }
    public function afficherCasting() {
            echo "<ul>";
        foreach ($this-> _castings as $casting) {
            echo "<li>".$casting."</li>"; 
        }
        echo "/ul";
    }
    public function __toString() {
        return $this->getNomPersonnages();
    }
}