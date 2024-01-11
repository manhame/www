<?php

class Auteur {
    private string $_prenom;
    private string $_nom;
    private array $_livres;

    public function __construct($prenom, $nom) {
        $this->_prenom = $prenom;
        $this->_nom = $nom;

        $this->_livres = []; // []   équivalent   array()
    }

    public function ajouterLivre(Livre $livre) {
        $this->_livres[] = $livre;
    }

    public function afficherLivres() {
        echo "<h2>Livres de ".$this -> getPrenom()." ".$this -> getNom()."</h2>";
        echo "<ul>";
        foreach ($this->_livres as $livre) {
            echo "<li>".$livre -> getInfos ()."</li>";
        }
        echo "</ul>";
    }

    public function getPrenom() {
        return $this->_prenom;
    }
    public function getNom() {
        return $this->_nom;
    }
    /*public function getLivres() {
        return $this->_livres;
    }*/
    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    }
    public function setNom(string $nom) {
        $this->_nom = $nom;
    }
    //pas de setLivres(array $livre) qui écraserait public function __construct ?

}
