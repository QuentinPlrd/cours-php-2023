<?php

// Une constante est une valeur "importante" dans notre programme qui doit être identifié comme telle et qui n'a aucune raison d'évoluer

// Exemple de la TVA : 20%

define('TAUX_TVA', 20);

// On écrit les constantes en FULL MAJUSCULE avec des UNDERSCORES en guise d'espace

$produitPrixHT = 100;
$produitTVA = $produitPrixHT * TAUX_TVA / 100;
$produitPrixTTC = $produitPrixHT + $produitTVA;

define('PI', 3.14); //Contient une valeur décimale
define('GENERIC_MESSAGE_ERROR', 'An error occured on line '); //Contient une chaîne de caractères

echo GENERIC_MESSAGE_ERROR . 32;

