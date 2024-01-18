<h1>EXERCICE CINEMA<h1>

<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$stevenSpielberg = new Realisateur ("Steven", "Spielberg","H", "1948-04-02");
$georgesLucas = new Realisateur ("Georges", "Lucas", "H", "1943-01-01");

$SF = new Genre("Science fiction");
$aventure = new Genre("Aventure");

$johnnyDepp = new Acteur("Johnny", "DEPP", "M", "1970-01-01");
$harrisonFord = new Acteur("Harrisson", "FORD","M", "1950-01-01");
$markHamill = new Acteur("Mark", "HAMILL", "M", "1951-01-01","a");
$michaelKeaton = new Acteur("Michael", "KEATON", "M", "1946-01-01");
$valKilmer = new Acteur("Val", "KILMER", "M", "1948-01-01");
$georgesClooney = new Acteur("Georges", "CLOONEY", "M", "1945-01-01");

$ET = new Film ("ET", "1980-12-12", 120, $stevenSpielberg, $SF, $johnnyDepp);
$jurassicPark = new Film ("Jurassic park", "1978-12-12", 148, $stevenSpielberg, $SF, $johnnyDepp);
$starWars = new Film("Star Wars épisode IV", "1980-01-01", 156, $georgesLucas, $SF, $harrisonFord);
$pdc = new Film ("Pirates des Caraibes", "2000-01-01", 148, $stevenSpielberg, $aventure, $johnnyDepp);
$batman1 = new Film ("Batman1", "2000-10-01", 148, $georgesLucas, $aventure, $michaelKeaton);
$batman2 = new Film ("Batman2", "2002-01-01", 150, $georgesLucas, $aventure, $valKilmer);
$batman3 = new Film ("Batman3", "2004-01-01", 152, $stevenSpielberg, $aventure, $georgesClooney);

$sparrow = new Role("Jack Sparrow");
$hansolo = new Role("Hansolo");
$lukeSky = new Role("Luke Skywalker");
$batman = new Role("Batman");

$casting1 = new Casting($johnnyDepp, $sparrow, $pdc);
$casting2 = new Casting($harrisonFord, $hansolo, $starWars);
$casting3 = new Casting($michaelKeaton, $batman, $batman1);
$casting4 = new Casting($valKilmer, $batman, $batman2);
$casting5 = new Casting($georgesClooney, $batman, $batman3);

//FILMS par REALISATEUR
$stevenSpielberg-> afficherFilms();
$georgesLucas-> afficherFilms();
//FILMS par GENRE 
$SF->afficherFilms();
$aventure->afficherFilms();
//FILMS PAR ACTEUR
$johnnyDepp->afficherFilms();
$harrisonFord->afficherFilms();
//CASTING par ACTEUR (joue quel rôle dans quel film)
$johnnyDepp->afficherCasting();
$harrisonFord->afficherCasting();
//CASTING par ROLE (joué par quel acteur dans quel film)
$hansolo->afficherCasting();
//ACTEURS par ROLE
$batman->afficherCasting();




