<?php

class Film {
    private string $_titre;
    private DateTime $_dateSortie;
    private int $_duree;
    private Genre $_genre;
    private Realisateur $_realisateur;
    private array $_castings; // acteurs + rôles

    public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur, Genre $genre) {
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime($dateSortie);
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_genre = $genre;

        $this->_castings =[];

        $this->_realisateur->ajouterFilm($this);
        $this->_genre->ajouterFilm($this);
    }

    public function getTitre() {
        return $this->_titre;
    }
    public function getDateSortie() {
        return $this->_dateSortie;
    }
    public function getDuree() {
        return $this->_duree;
    }
    public function getGenre() {
        return $this->_genre;
    }
    
    public function getRealisateur() { 
        return $this->_realisateur;
    } 
    /*
    public function getInfos() {
        return $this->_titre." est sorti en ".$this->_dateSortie." ; il dure ".$this->_duree."<br>";
        }*/

    public function setTitre(string $titre)  {
        $this->_titre = $titre;
        }  
    public function setDateSortie(DateTime $dateSortie) {
        $this->_dateSortie = $dateSortie;
        }
    public function setDuree(int $duree) {
        $this->_duree = $duree;
    }
    /*
    public function setGenre($genre) {
        $this->genre = $genre;
    }*/

    public function __toString() {
        return $this->getTitre()." film d'une durée de ".$this->getDuree()." min sorti le ".$this->getDateSortie()->format("d-m-Y");
    }

    public function ajouterCasting(Casting $casting) {
        $this->_castings[] = $casting; //on alimente l'objet "_films" tableau vide élément par élément
    }
    public function afficherCasting() {
        echo "<ul>";
        foreach ($this-> _castings as $casting) {
        echo "<li>".$casting."</li>";     
        }
        echo "</ul>";
    }
}

    // afficher les acteurs + rôles

    
