<?php

class Role {

    private string $_nomPersonnages;
    private array $_castings; // acteurs + films
    private array $_acteurs; 

    public function __construct(string $nomPersonnage) {
        $this->_nomPersonnages = $nomPersonnage;
        $this->_castings = [];
        $this->_acteurs = [];
    }
    public function getNomPersonnages() {
        return $this->_nomPersonnages;
    }
    public function getCasting() {
        return $this->_castings;
    }
    public function getActeurs() {
        return $this->_acteurs;
    }
    public function setNomPersonnages(string $nomPersonnage) {
        $this->_nomPersonnages = $nomPersonnage;
    }
    
    // afficher les acteurs + films
    public function ajouterCasting(Casting $casting) {
        $this->_castings[] = $casting; //on alimente l'objet "_castings" tableau vide élément par élément
    }
    public function ajouterActeur(Acteur $acteur) {
        $this->_acteurs[] = $acteur;
    }
    public function afficherCasting() {
        echo "<h2>Casting par rôle : ".$this."</h2><ul>";
        foreach ($this-> _castings as $casting) {
            
            echo "<li>".$casting->getActeurs() ." dans le film".$casting->getFilms()->getTitre() ."</li>"; 
        }
            echo "</ul>---------------------------------------";
    }    
    public function afficherActeur() {
            echo "<h2>Acteurs par rôle : ".$this."</h2><ul>";
        foreach ($this-> _acteurs as $acteur) {
            echo "<li>".$acteur->getActeurs()."</li>"; 
    }
            echo "</ul>---------------------------------------";
    }    
    public function __toString() {
        return $this->getNomPersonnages();
    }
 }      