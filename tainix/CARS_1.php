<?php

$plates = ['RP-676-HQ', 'ZJ-117-EM', 'PM-729-OH', 'LU-286-WV', 'PI-851-UJ', 'GA-741-ZI', 'QD-777-IQ', 'GO-383-KZ', 'KT-218-CA', 'EC-333-AV', 'PZ-863-ET', 'SZ-515-RS', 'UZ-475-XQ', 'ZM-648-WQ', 'VI-492-DJ', 'DT-872-YO', 'SB-923-YB', 'WN-702-QB', 'UG-156-WP', 'HY-858-PC', 'TE-948-XU', 'YI-104-WW', 'YE-368-LI'];

$score = 0;

foreach ($plates as $plate) {
    $score += score($plate);
}

echo '<p> Score : ' . $score . '</p>';

// Créer une fonction qui analyse la plaque et une position, et renvoie true ou false selon symétrie
// Par exemple analyse ('FD-306-PF') renvoie true, symétrie sur la position 0

    // Règles
    // La plaque ED-845-TY ne présente aucune symétrie et vaut donc 1 point
    // La plaque ED-845-TE présente 1 symétrie (le E) et vaut donc 10 points
    // La plaque ED-845-DY présente 1 symétrie (le D) et vaut donc 10 points
    // La plaque ED-848-TY présente 1 symétrie (le 8) et vaut donc 10 points
    // La plaque ED-845-DE présente 2 symétries (le E et le D) et vaut donc 100 points (2 autres possibilités de double symétrie)
    // La plaque ED–848–DE présente 3 symétries (le E, le D et le 8) et vaut donc 1 000 points

function analyse(string $plate, int $position) : bool 
{
    
    if ($plate[$position] === $plate[8 - $position]) {
        return true;
    }

    return false;

    // Alternative (plus court)
    // On utilise juste un return
    // return ($plate[$position] === $plate[8 - $position]);
    // On peut rajouter le cas d'une erreur au dessus 
    // if (strlen($plate) != 8) {
    //     die('Mauvais format');    
    // }
    // return ($plate[$position] === $plate[8 - $position]);

}

function score(string $plate) : int 
{
    // Appeler analyse 3 fois

    // 1. J'initialise le score
    $score = 1;

    // 2. Je vérifie ma position 0
    if (analyse($plate, 0)) {
        $score *= 10;
    }

    // 3. Ma position 1
    if (analyse($plate, 1)) {
        $score *= 10;
    }

    // 4. Ma position 3
    if (analyse($plate, 3)) {
        $score *= 10;
    }

    // Je retourne mon score

    return $score;

    // 5. Je retourne mon score
}

// Score soit 1, 10 ,100, 1000
// Puissance de 10
// Solution B : Compter le nombre de symétries, puis pow
// Solution A : On part de 1, et on multiplie par 10 à chaque symétrie