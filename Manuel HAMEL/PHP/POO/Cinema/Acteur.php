<?php


class Acteur extends Personne {
    private array $_castings;
    private array $_films; // rôles + films

    public function __construct (string $prenom, string $nom, string $sexe, string $dateNaissance) {//pourquoi array ?
        parent ::__construct ($prenom, $nom, $sexe, $dateNaissance);
        $this->_castings = [];
        $this->_films = [];
    }

    public function ajouterCasting(Casting $casting) {
        $this->_castings[] = $casting; //on alimente l'objet "_castings" tableau vide élément par élément
    }
    public function ajouterFilm(Film $film) {
        $this->_films[] = $film; //on alimente l'objet "_films" tableau vide élément par élément
    }
    public function afficherCasting() {
        echo "<h2>Casting par acteur</h2>";
        echo "<ul>";
        foreach ($this->_castings as $casting) {
            echo "<li>".$casting."</li>"; 
        }
        echo "</ul>";
    }
    public function afficherFilm() {
        echo "<h2>Films par acteur</h2>";
        echo "<ul>";
        foreach ($this->_films as $film) {
            echo "<li>".$film."</li>"; 
        }
        echo "</ul>";
    }
}
    // afficher la liste de ses films + rôles
