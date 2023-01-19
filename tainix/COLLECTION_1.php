<?php

$exemplaires = [50000, 50000, 50000, 2000, 2000, 50000, 2000, 50000, 2000, 50000, 50000, 50000, 50000, 2000, 100, 50000, 50000, 50000, 50000, 2000, 2000, 2000, 50000, 2000, 2000, 50000, 50000, 50000, 2000, 2000, 50000, 50000, 2000, 50000, 50000, 2000, 50000, 50000, 50000, 50000, 50000];
$cotes = [1, 0.6, 0.8, 1.2, 0.6, 0.6, 0.8, 0.6, 0.8, 0.8, 1.2, 0.6, 0.6, 0.8, 1.6, 1.2, 1.2, 1.2, 0.8, 1, 1.2, 0.8, 1, 0.6, 0.6, 0.8, 0.8, 0.6, 0.6, 0.8, 1.2, 0.8, 0.8, 0.8, 0.6, 0.8, 1, 1.2, 0.8, 0.6, 0.6];
// Commencer par "fusionner" les 2 tableaux en 1 seul qui contient toutes les informations (tableaux de tableaux, avec des index bien nommés : 'achat', 'cote', 'revente')

// A l’achat, une figurine vaut 15€, sauf si elle est produite à moins de 2.000 exemplaires, dans ce cas là, elle vaut 30€.
// A la revente, la figurine vaudra sa côte * prix d’achat (produit).


$tableauAvecTout = [];

$totalAchat = 0;
$totalRevente =0;


$tableauAvecTout = [];

foreach($exemplaires as $key => $exemplaire) {
    $cote = $cotes[$key];

    // Calcul prix d'achat
    $achat = 15;
    if($exemplaire < 2000) {
        $achat = 30;
    }

    // Calcul prix de revente
    $revente = $achat * $cote;

    // On met tout bien rangé dans un $tableauAvecTout
    $figurine = [
        'exemplaires' => $exemplaire,
        'achat' => $achat,
        'cote' => $cote,
        'revente' => $revente
    ];

    $tableauAvecTout[]=$figurine;

}

echo '<pre>';
print_r($tableauAvecTout);
echo '</pre>';

// array_column et array_sum

$total = 
   array_sum(array_column($tableauAvecTout, 'revente')) -
   array_sum(array_column($tableauAvecTout, 'achat'));

echo '<p>'. $total .'</p>';












// BON MAIS PAS DEMANDER CAR ON VEUT DES TABLEAUX DE TABLEAUX, DES INDEXS ETC ..

// foreach($exemplaires as $key => $exemplaire) {
//     $cote = $cotes[$key];

//     $prixAchat = 0;
//     // Calcul prix d'achat
//     if ($exemplaire < 2000) {
//         $prixAchat = 30;
//         $totalAchat += $prixAchat;

//     } else {
//         $prixAchat = 15;
//         $totalAchat += $prixAchat;
//     }


//     // Calcul prix de revente
//     $prixRevente = 0;
//     if ($exemplaire < 2000) {
//         $prixRevente = $cote*30;
//         $totalRevente += $prixRevente;

//     } else {
//         $prixRevente = $cote*15;
//         $totalRevente += $prixRevente;
//     }

//     // On met tout bien rangé dans $tableauAvecTout
// }

// $difference = $totalRevente - $totalAchat;
// echo $difference;