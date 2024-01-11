<!DOCTYPE html>

<p> "exercice 15 Classe de personnes"</p>
<body>


<?php
  
Class Personne {

    // attributs de la classe
    private string $_nom;
    private string $_prenom;
    private string $_dateNaissance;

    // constructeur
    public function __construct(string $nom, string $prenom, string $dateNaissance) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = $dateNaissance;
    }

    // getters (accesseurs)
    public function getNom() {
        return $this->_nom;
    }
    public function getPrenom() {
        return $this->_prenom;
    }
    public function getDateNaissance() {
        return $this ->_dateNaissance;
    }

    // setters (mutateurs)
    public function setNom(string $nom) {
        $this->_nom = $nom;
    }
    public function setPrenom(string $prenom) {
        $this->_prenom = $prenom;
    }
    public function setDateNaissance(string $dateNaissance) {
        $this->_dateNaissance = $dateNaissance;
    }
}


// instancier 2 personnes - afficher nom,prenom, âge;
$p1 = new Personne("DUPONT","Michel","1980-02-19");
$p2 = new Personne("DUCHEMIN","Alice","1985-01-17");
 
echo $p2->getNom();
$p2->setNom($p1->getNom());
echo $p2->getNom();
echo $p1->getdateNaissance();
$p2->setDateNaissance($p1->getdateNaissance());
echo $p2->getDateNaissance();
$p2->setDateNaissance("1985-01-17");
echo $p2->getdateNaissance();