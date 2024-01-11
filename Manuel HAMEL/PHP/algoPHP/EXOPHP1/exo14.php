<h1>Exercice 14</h1>

<p>Age exact d'une personne à partir de sa date de naissance</p>

<?php

$dateNaissance = "1985-01-17";
  $aujourdhui = date("2018-05-21");
  $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));

  echo "Age de la personne : " .$diff->format("%y ans %m mois %d jours"). "<br>";

  ?>
  


  