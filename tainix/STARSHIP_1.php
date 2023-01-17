<?php

$ships = [867, 93, 2393, 4148, 70, 473, 22, 1664, 30, 69, 13, 35, 64, 9678, 225, 97, 15, 728, 3374, 96, 6273, 28, 13, 53, 33, 980, 1504, 89, 911, 923, 949, 86, 8403];

$puissanceTotale = 0;

foreach ($ships as $shipResistance){
    $shipRestistance = rand(11, 9999);
    echo '<p>' . $shipResistance .'</p>';

    $puissanceTotale += puissance($shipResistance);
}





echo '<p>Pour détruire tous les vaisseaux, je dois avoir une puissance de ' . $puissanceTotale . '</p>';

function puissance (int $resistance) : int
{
    // On utilisera des 'early return'    

    // Voici les règles :

    // Si le vaisseau a une résistance inférieure à 100, alors la puissance doit être égale à la résistance divisée par 10, arrondie à l’entier supérieur.

    if ($resistance < 100) {
        return ceil($resistance / 10);
    }

    // Si le vaisseau a une résistance inférieure à 1.000, alors la puissance doit être égale à 3 fois la résistance divisée par 100, arrondie à l’entier supérieur. Une puissance fixe de 25 s’ajoute également.

    if ($resistance < 1000) {
        return 25 + 3 * ceil($resistance / 100);
    }

    // Si le vaisseau a une résistance inférieure à 10.000, alors la puissance doit être égale à 5 fois la résistance divisée par 1.000, arrondie à l’entier supérieur. Une puissance fixe de 80 s’ajoute également.

    if ($resistance < 10000) {
        return 80 + 5 * ceil($resistance / 1000);
    }
 }
    // Pas de else car on utilise de early return






// TEST 

    // $shipRestistance = rand(11, 9999);
    // $puissanceArme = 0;
    // $puissanceTotale = 0;

    // if ($shipRestistance < 100) {
    //     $puissanceArme = ceil($shipRestistance / 10);

    //     return $puissanceArme;
    // } 
    // if ($shipRestistance < 1000) {
    //     $puissanceArme = ceil($shipRestistance / 100)*3;
    //     $puissanceTotale +=25;

    //     return $puissanceArme;

    // } else {
    //     $puissanceArme = ceil($shipRestistance / 1000)*5;
    //     $puissanceTotale += 80;

    //     return $puissanceArme;
    // }
