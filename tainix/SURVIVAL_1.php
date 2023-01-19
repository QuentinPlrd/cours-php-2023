<?php

$islandX = 21;
$islandY = 43;
$planes = ['P:99,39C:WFP', 'P:18,4C:LRS', 'P:37,15C:LEG', 'P:9,84C:TCO', 'P:7,11C:KBD', 'P:91,7C:RZO', 'P:90,11C:ZNE'];

// Initialiser un tableau vide

$distanceDesAvions = [];

foreach ($planes as $planeInformations) {

    // On mettra comme clé le code de l'avion
    $plane = parser($planeInformations);
    // Et comme valeur la distance
    $distanceDesAvions = pythagore( 
        xa: $plane['x'], 
        ya: $plane['y'], 
        xi: $islandX, 
        yi: $islandY,
    );

    $planesDistances[$plane['code']]= $distanceBeetweenPlaneAndIslad;
}

sort($planesDistances);

$planesDistances = array_slice($planesDistances, 0, 3);
echo '<pre>';
print_r($planesDistances);
echo '</pre>';
$planesCodes = array_keys($planesDistances);

echo '<pre>';
print_r($planesDistances);
echo '</pre>';

$codes = implode('', $planesCodes);
echo $code;
// On triera tout ça


// 1. Fonction Pythagore


function pythagore(int $xa, int $xi, int $ya, int $yi) : float
{
    // pow(, 2)
    $distanceX = pow(($xi - $xa),2);
    $distanceY = pow(($ya - $yi),2);
    $distanceAvion= sqrt(($distanceX + $distanceY));

    return $distanceAvion;
    // sqrt()
}

// exemple 
echo pythagore(
    xa: 0, 
    xi: 3, 
    ya: 0,
    yi: 4
); // Ca doit donner 5

// 2. Parsing



function parser (string $informations) : array
{
    $data = sscanf($informations, 'P:%d,%dC:%s');

    return [
        'x' => $data[0] ,
        'y' =>  $data[1],
        'code' =>  $data[2],
    ];
}




// 2 possibilités : 
// bricoler avec substr, strlen et explode
// sscanf => Meilleure solution dans ce cas


// return [
  //     'x' => 62,
  //     'y' => 1,
  //     'code' => WAD,
  // ];



