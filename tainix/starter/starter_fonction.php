<?php

// Données
// values est un tableau qui contient une vingtaine de valeurs entières comprises entre 10 et 100
// Réponse attendue
// Tu dois retourner une chaine de caractères contenant toutes les valeurs qui sont des multiples de 3, séparées par des tirets.

// Par exemple, si values contient [17, 27, 44, 10, 93] il faut retourner « 27-93 », ce sont les 2 seules valeurs qui sont multiples de 3.

$values = [66, 40, 32, 94, 92, 47, 93, 46, 58, 17, 84, 72, 82, 86, 12, 37, 48, 67, 33, 43, 56, 100, 33, 12, 30, 28, 39, 68];

$multiple = [];

foreach ($values as $value) {
    if($value%3 == 0) {
        $multiple[] = $value;
        // Possibliité de faire un array_push ($tab, $value);
    }
}

$resultat = implode("-" , $multiple);
echo $resultat;
// Ou directement echo implode("-" , $multiple);




// AVEC UNE FONCTION

function multiple(array $values, int $multiple) : array
{
    $tab = [];

    foreach ($values as $value) {
        if($value % $multiple == 0) {
            $tab[] = $value;
            // Possibliité de faire un array_push ($tab, $value);
        }
    }
    
    return $tab;
}


echo '<br>';
echo implode("-" , multiple($values, 3));






// echo '<p>La chaine de caractère est : ' . $chaineDeCaracteres . '</p>';