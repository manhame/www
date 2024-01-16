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
    public function setNomPersonnages(string $nomPersonnage) {
        $this->_nomPersonnages = $nomPersonnage;
    }
    // afficher les acteurs + films
    public function ajouterCasting(Casting $casting) {
        $this->_castings[] = $casting; //on alimente l'objet "_castings" tableau vide élément par élément
    }
    public function afficherCasting() {
        echo "<h2>".$this." a été joué par </h2>";
        echo "<ul>";
        foreach ($this-> _acteurs as $acteur) {
        echo "<li>".$acteur."</li>";     
        }
        foreach ($this->_films as $film) {
        echo "<li>".$film."</li>";
        }
    }
}