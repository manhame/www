<h1>EXERCICE CINEMA<h1>

<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$rea1 = new Realisateur ("Steven", "Spielberg","H", "1948-04-02");
$gen1 = new Genre("Science fiction");
$aventure = new Genre("Aventure");

$fil1 = new Film ("ET", "1980-12-12", 120, $rea1, $gen1);
$fil2 = new Film ("Jurassic park", "1978-12-12", 148, $rea1, $gen1);

$rea1-> afficherFilms();
$gen1->afficherFilms();

$johnnyDepp = new Acteur("Johnny", "DEPP", "M", "1970-01-01");
$sparrow = new Role("Jack Sparrow");
$pdc = new Film ("Pirates des Caraibes", "2000-01-01", 148, $rea1, $aventure);

$casting1 = new Casting($johnnyDepp, $sparrow, $pdc);
$johnnyDepp->afficherCasting();
$sparrow->afficherCasting();
$pdc->afficherCasting();


/*
afficherRoles et afficherFilms
lister pour chaque acteur quels rôles dans quels films
lister pour chaque film quels acteurs et quels rôles
lister pour chaque rôle quels acteurs dans quelq films

*/