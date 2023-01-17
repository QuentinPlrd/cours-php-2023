<?php

$depart = 6199993;
$chemin = ['+++++++', '+++++++', '++++++', '++++++', '++++++', '++++++', '+++++', '+++++', '----', '----', '+++', '+++', '+++', '+++', '-', '-', '-', '-', '-'];

// Alternative : utiliser une autre variable que $depart
// $resultat = $depart
// $arrivee = $depart

foreach ($chemin as $part) {
    $depart += convert($part);
}

echo '<p>A la fin le code est : ' . $depart . ' </p>';

function convert(string $code) : int 
{
    // Le nombre de signe indique quelle puissance de 10 il faut prendre en compte, sous la forme 10^(nombre de signe – 1)
    // Utiliser la fonction strlen
    $nombreDeSignes = strlen($code);
    // Utiliser la fonction pow
    $value = pow(10, $nombreDeSignes - 1);


    // Par exemple :

    // « + » signifie + 1
    // « — » signifie -10
    // « +++ » signifie +100
    // etc.

    $signe = $code[0];

    if ($signe === '+') {
        return $value;
    } else {
        return -$value;
    };

    //Le signe « + » ou « – » indique s’il faut ajouter ou soustraire une valeur.
}


