<?php

class Casting {

    private Acteur $_acteurs;
    private Role $_roles;
    private Film $_films;

    public function __construct(Acteur $acteur, Role $role, Film $film) {
        $this->_acteurs = $acteur;
        $this->_roles = $role;
        $this->_films = $film;

        $this->_acteurs->ajouterCasting($this);
        $this->_roles->ajouterCasting($this);
        $this->_films->ajouterCasting($this);
    }
    public function getActeurs() {
        return $this->_acteurs;
    }
    public function getRoles() {
        return $this->_roles;
    }
    public function getFilms() {
        return $this->_films;
    }

    public function setActeurs(Acteur $acteur) {
        $this->_acteurs = $acteur;
    }
    public function setRoles(Role $role) {
        $this->_roles = $role;
    }
    public function setFilms(Film $film) {
        $this->_films = $film;
    }

}