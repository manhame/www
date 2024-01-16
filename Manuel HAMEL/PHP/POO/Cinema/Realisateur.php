<?php

class Realisateur extends Personne {
   
    protected array $_films;//on déclare un attribut "tableau" pour préparer la liaison des classes

    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance) {
       parent::__construct($prenom, $nom, $sexe, $dateNaissance);
        
       $this->_films = []; //on attribue un tableau vide à la classe liée/ pas possible comme pour Date directement sans étape ci-dessous ?
    }

    public function ajouterFilm(Film $film) {
        $this->_films[] = $film; //on alimente l'objet "_films" tableau vide élément par élément
    }

    public function afficherFilms() {
        echo "<h2>".$this." a réalisé les films suivants : </h2>";//this seul car public function _toString dans la class liée Film
        echo "<ul>";
        foreach($this->_films as $film) {
            echo "<li>".$film."</li>";
        }    
        echo "</ul>";
    }
  }
