<?php

class Genre {
    private string $_categories;
    private array $_films;

    public function __construct(string $categorie) {
        $this->_categories = $categorie;
        $this->_films = [];
    }

    public function ajouterFilm(Film $film) {
        $this->_films[] = $film;
    }

        public function getCategorie() {
        return $this->_categories;
    }
    public function setCategorie($categorie) {
        $this->_categories->$categorie;
    }
    public function afficherFilms() {
        echo "<h2> Dans le genre ".$this->getCategorie()." on retrouve les films suivants :</h2>";
        echo "<ul>";
            foreach($this->_films as $film) {
                echo "<li>$film</li>";
            }
        echo "</ul>";
    }
}