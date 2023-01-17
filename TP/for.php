<?php

//1
//Ecrivez 100 fois : "Je ne copierais pas le code PHP de mon voisin" 

for ($i = 1; $i <=100; $i++){
    echo '<p>Je ne copierais pas le code PHP de mon voisin</p>';
}

//2
// Ecrivez 150 fois : "Je ne copierais pas le code PHP de mon voisin" en affichant chaque numéro de ligne :
// 1)
// 2)

for ($i = 1; $i <=150; $i++){
    echo '<p>' .$i. ') Je ne copierais pas le code PHP de mon voisin</p>';
}

// 3
// Trouver la somme des 100 permiers nombres : 1 + 2 + .. + 100 = ?

$resultat = 0;
for ($i=1; $i<=100; $i++){
    $resultat = $resultat+$i;
}
echo '<p> Somme :' .$resultat .'</p>';

// 4
// Trouver la somme des 100 permiers nombres pairs : 2 + 4 + .. + 200 = ?

// V1, avec modulo
// $somme = 0;
// for($i =1; $i<=200; $i++){
//     if($i%2 == 0){
//         $somme += $i;
//     }
// }

// echo '<p> Somme :' .$somme .'</p>';


// V2, sans modulo

$somme = 0;
for ($i = 2; $i <= 200; $i+=2){
    $somme += $i;
}
echo '<p> Somme :' .$somme .'</p>';




// 5
// Trouver la différence entre le somme des carrés des 100 premiers nombres et le carré de la somme des 100 permiers nombres :
// (1^2 + 2^2 + 3^2 + ... + 100^2) - (1+2+3+4+ ...+100)^2

// la somme des carrés
$sommeDesCarres = 0;
for ($i = 1; $i <= 100; $i++) {
    $carre = $i * $i;
    $sommeDesCarres += $carre;
}

// carré de la somme
$somme = 0;
for ($i = 1; $i <= 100; $i++) {
    $somme += $i;
}

$carreDeLeSomme = $somme * $somme;

// Différence 
$difference = $sommeDesCarres - $carreDeLeSomme;
echo '<p> Différence' .$difference . '</p>';