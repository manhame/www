<h1>EXERCICE CINEMA<h1>

<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$rea1 = new Realisateur ("Steven", "Spielberg","H", "1948-04-02");
$rea2 = new Realisateur ("Georges", "Lucas", "H", "1943-01-01");
$gen1 = new Genre("Science fiction");
$aventure = new Genre("Aventure");

$johnnyDepp = new Acteur("Johnny", "DEPP", "M", "1970-01-01");
$harrisonFord = new Acteur("Harrisson", "FORD","M", "1950-01-01");
$markHamill = new Acteur("Mark", "HAMILL", "M", "1951-01-01");

$fil1 = new Film ("ET", "1980-12-12", 120, $rea1, $gen1, $johnnyDepp);
$fil2 = new Film ("Jurassic park", "1978-12-12", 148, $rea1, $gen1, $johnnyDepp);
$StarWars = new Film("Star Wars épisode IV", "1980-01-01", 156, $rea2, $gen1,$harrisonFord);
$pdc = new Film ("Pirates des Caraibes", "2000-01-01", 148, $rea1, $aventure,$johnnyDepp);

$rea1-> afficherFilms();
$rea2-> afficherFilms();
$gen1->afficherFilms();

$sparrow = new Role("Jack Sparrow");
$hansolo = new Role("Hansolo");
$lukeSky = new Role("Luke Skywalker");

$casting1 = new Casting($johnnyDepp, $sparrow, $pdc);
$casting2 = new Casting($harrisonFord,$hansolo,$StarWars);

$johnnyDepp->afficherCasting();
$harrisonFord->afficherCasting();
$pdc->afficherCasting();

$johnnyDepp->afficherFilms();


/*
afficherRoles et afficherFilms
lister pour chaque acteur quels rôles dans quels films
lister pour chaque film quels acteurs et quels rôles
lister pour chaque rôle quels acteurs dans quelq films

*/