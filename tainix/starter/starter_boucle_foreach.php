<?php

// Données
// values est un tableau qui contient une vingtaine de valeurs entières comprises entre 1 et 10
// Réponse attendue
// Tu dois retourner la somme des valeurs supérieures ou égales à 5 comprises dans values.

// Par exemple, si values contient [1, 3, 4, 8, 6, 2, 5] il faut retourner 8 + 6 + 5 = 19.


$values = [9, 1, 5, 6, 1, 10, 5, 9, 10, 10, 9, 10, 8, 5, 7, 7, 5, 10, 5, 5, 8, 9, 9, 6];


// $sommme = 0;
// foreach ($values as $value) {
//     if ($value >= 5 ) {
//         $sommme += $value;
//     }
// }

// echo '<p>La somme est : ' . $sommme  . '</p>';



$sommme = 0;
foreach ($values as $value) {
    if ($value < 5) { //!$value >5
        continue;
    }
    $sommme += $value;
}

echo '<p>La somme est : ' . $sommme  . '</p>';