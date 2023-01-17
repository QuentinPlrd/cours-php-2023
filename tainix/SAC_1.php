<?php

$sac = 968;
$objets = [67, 40, 25, 11, 37, 61, 78, 85, 72, 35, 33, 70, 30, 10, 39, 53, 36, 24, 16, 89, 50, 29, 63, 44];


sort($objets);
echo '<pre>';
print_r($objets);
echo '</pre>';

rsort($objets);
echo '<pre>';
print_r($objets);
echo '</pre>';

$remplissageSac = 0;

$nbObjetMisDansLeSac = 0;
$maxGrosObjetMisDansLeSac = 10;

// $les10PlusGrosObjets = array_slice($objets, 0, 10);

foreach ($objets as $objet) {

    // Essayer de remplir le sac


    if (($remplissageSac + $objet) <= $sac) {
        $remplissageSac += $objet;
    }

    $nbObjetMisDansLeSac++;
    if ($nbObjetMisDansLeSac >= $maxGrosObjetMisDansLeSac) {
        break;
    }
}


$nbObjetMisDansLeSac = 0;
$maxPetitsObjetMisDansLeSac = 10;



foreach ($objets as $objet) {

    // Essayer de remplir le sac


    if (($remplissageSac + $objet) <= $sac) {
        $remplissageSac += $objet;
    }

    $nbObjetMisDansLeSac++;
    if ($nbObjetMisDansLeSac >= $maxPetitsObjetMisDansLeSac) {
        break;
    }
}

echo '<p>Remplissage : ' . $remplissageSac . ' / ' . $sac . '</p>';

// TEST

// $capaciteSac = 0;
// $numeroObjet = 0;

// while ($capaciteSac < $sac) {
//     $capaciteSac += $objets[$numeroObjet];
//     $numeroObjet ++;
// }

// echo $capaciteSac