<?php

class Casting {

    private Acteur $_acteurs;
    private Role $_nomPersonnages;
    private Film $_films;

    public function __construct(Acteur $acteur, Role $nomPersonnage, Film $film) {
        $this->_acteurs = $acteur;
        $this->_nomPersonnages = $nomPersonnage;
        $this->_films = $film;
        $this->_acteurs->ajouterCasting($this);
        $this->_nomPersonnages->ajouterCasting($this);
        $this->_films->ajouterCasting($this);
    }
    public function getActeurs() {
        return $this->_acteurs;
    }
    public function getRoles() {
        return $this->_nomPersonnages;
    }
    public function getFilms() {
        return $this->_films;
    }

    public function setActeurs(Acteur $acteur) {
        $this->_acteurs = $acteur;
    }
    public function setRoles(Role $nomPersonnage) {
        $this->_nomPersonnages = $nomPersonnage;
    }
    public function setFilms(Film $film) {
        $this->_films = $film;
    }

}