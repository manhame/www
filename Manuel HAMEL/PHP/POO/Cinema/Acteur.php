<?php


class Acteur extends Personne {
    private array $_castings; // rôles + films

    public function __construct (string $prenom, string $nom, string $sexe, string $dateNaissance) {//pourquoi array ?
        parent ::__construct ($prenom, $nom, $sexe, $dateNaissance);
        $this->_castings = [];
    }

    public function ajouterCasting(Casting $casting) {
        $this->_castings[] = $casting; //on alimente l'objet "_castings" tableau vide élément par élément
    }
    public function afficherCasting() {
        echo "<ul>";
        foreach ($this->_castings as $casting) {
            echo "<li>".$casting."</li>"; 
        }
        echo "</ul>";
    }
}
    // afficher la liste de ses films + rôles
