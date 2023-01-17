<?php 

// LES FONCTIONS

// echo
// rand()
// min() max()
// shuffle()
// print_r()
// range()

// 2 grandes familles de fonctions

// Fonctions natives, déjà disponibles dans PHP
// Est ce que ça n'existe pas déjà dans PHP ?

$tableau = [1, 2, 3];

$nbElements = count($tableau);

// Nom de la fonction
// Des parenthèses
// Un ou des paramètres
// Important de respecter les types attendus
// Important de respecter l'ordre

$carreDeDeux = pow(2, 2);
$carreDeTrois = pow(3, 2);

// ne pas hésiter à se référer à la documentation 

// Fonctions personalisées 

function double(int $nombre) : int  //On met int pour indiquer le typage nombre est un int et la fonction renvoie un int
{
    $double = 2 * $nombre;
    
    return $double;

    // ou direct 
    // return 2 * $nombre
}

$essai = double(4);
echo $essai;

$essai2 = double(124);
echo $essai2;

/**
 * La recette d'une fonction :
 * 1. Le mot clé function
 * 2. Son nom : camelCase, explicite
 * 3. Le ou les paramètres, avec leur type
 *      int => nbr entier
 *      float => nbr décimau
 *      string => chaine de caractères
 *      bool => booléen
 *      array => tableau
 *      ....... (il y en a plein d'autre)
 * 4. Le type de retour(cf . point précédent)
 * 5. Le return
 * 6. Les instructions de la fonction
 */

function repeteUnMot(string $mot, int $nbRepetition) : string
{
    $motRepetes = '';

    //Etape 6. Je code le "coeur" de ma fonction


    return $motRepetes;
}

// NE PAS CONFONDRE :
// - la déclaration d'une fonction 
// - son utilisation 
// On parle de la différence de 'scope'



function buildSentence (string $name, string $room)
{
    $sentence = '';
    $sentence .= $name;
    $sentence .= ' is in the ';
    $sentence .= $room;

    return $sentence;
}

echo '<p>' . buildSentence('Bryan', 'kitchen') .'</p>';

// echo $name;
// echo $room;
// echo $sentence;

 