<?php

// Données
// stop contient un nombre entier compris entre 50 et 100
// Réponse attendue
// Tu dois retourner la somme des valeurs entières de 1 jusque stop.

// Si par exemple stop vaut 4, alors il faut retourner 1 + 2 + 3 = 6.

$stop = 62;
$resultat = 0;
for ($i = 1; $i < $stop ; $i++) {
    $resultat += $i;
}

echo '<p>Le résultat est : ' . $resultat . ' </p>';