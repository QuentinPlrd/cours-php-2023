<?php

// 
// Exercices autour des tableaux
// 

// 1.
// Créer un tableau vide.
// Remplissez ce tableau avec les valeurs de 1 à 1000

$tableau = [];

for ($i=0; $i<=1000; $i++) {
    $tableau[] += $i;
}
// a) En parcourant le tableau, affichez tous les multiples de 3

// foreach ($tableau as $nombre) {
//    if ($nombre%3 == 0){
//     echo '<p>' . $nombre . '</p>';
//    }
// }
// b) En parcourant le tableau, affichez les nombres multiples de 3 et de 5

// foreach ($tableau as $nombre) {
//     if ($nombre%3 == 0 && $nombre%5 == 0){
//      echo '<p>' . $nombre . '</p>';
//     }
//  }

// CORRECTION 

$compteur = 0;

foreach ($tableau as $key => $nombre ){

    echo 'Affiche $nombre : ' . $nombre;

    if ($nombre%3 === 0){
        echo ' MULTIPLE DE 3';
    }

    if ($nombre%3 === 0 && $nombre%5 === 0) {
        echo ' ET MULTIPLE DE 5';
        $compteur++;
    }

    echo '<br>';
}



// c) Et compter combien il y en a
// On rajoute juste une variable qui s'incrémente de 1 lorsque les 2 conditions sont remplies



// 2
// Créer un tableau de 5 prénoms masculins
// Créer un tableau de 5 prénoms fénimin
// Créer un tableau de 5 aliments
// Créer un tableau de 5 villes
// Générer toutes les combinaisons possibles

$garcon =['Quentin', 'Carl', 'Gabin', 'Nicolas', 'Baptiste'];
$fille =['Marie', 'Manon', 'Clémence', 'Typhaine', 'Camille'];
$aliment =['Pomme', 'Chocolat', 'Pain', 'Cereales', 'Viande'];
$ville =['Rennes', 'Paris', 'Marseille', 'Nice', 'Strasbourg'];


// $phrase = '';
// for ($i =1; $i <= 50; $i++) {
//     foreach ($garcon as $prenomgarcon){
//         $phrase .= $prenomgarcon;
//     }
//     foreach ($fille as $prenomfille){
//         $phrase .= ' et ' .$prenomfille; 
//     }
//     foreach ($aliment as $bouffe){
//         $phrase .= 'mangent ' . $bouffe;
//     }
//     foreach ($ville as $lieu){
//         $phrase .= 'à ' . $lieu;
//     }
// }

// echo $phrase;

foreach ($garcon as $prenomgarcon) {
    foreach ($fille as $prenomfille) {
        foreach ($aliment as $bouffe) {
            foreach ($ville as $lieu) {
                echo '<p> '. $prenomgarcon . ' et ' . $prenomfille . ' mangent ' . $bouffe . ' à ' . $lieu . '</p>';
            }
        }
    }
}

// Générer 50 phrases aléatoires du gente "Arthur et Pauline mangent une Pomme à Paris"



// 3
// Créer un tableau de 10 valeurs comprises entre 0 et 100 aléatoirement.
// Trouver la valeur maximum et la valeur minimum à chaque exécution du code
// (sans utiliser les fonctions min et max)

$tableau = [];
for ($i = 1; $i <= 10; $i++) {
    $tableau[]=rand(0, 100);
}

echo '<pre>';
print_r($tableau);
echo '</pre>';
// Postulat de départ / Conditions initiales 
$min = $tableau[0];
$max = $tableau[0];


// Traitement
foreach ($tableau as $valeur) {
    if ($valeur < $min ){
        echo '<p>Changement de minimun, ' . $valeur . ' devient le nouveau minimun  </p>';
        $min = $valeur;
    }

    if ($valeur > $max){
        echo '<p>Changement de maximum, ' . $valeur . ' devient le nouveau maximum  </p>';
        $max = $valeur;
    }

}


// Affichage de la solution
echo '<p>Le minimun est ' . $min . '</p>';
echo '<p>Le maximun est ' . $max . '</p>';