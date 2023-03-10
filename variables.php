<?php

// Le premier type de variable :
// Les CHAINES DE CARACTERES

// Déclaration d'une varaible, utilisation du symbole $
// Le nommage est très important 
// Pas de caractères spéciaux, pas d'espace
// On utilise du camelCase
// On ne nommera pas : $var, $truc, $mPCDC
// Quelques exepcetions : petits exercices d'algos; $i pour les boucles

$SautDeLigne = '<br/>';

$maPremiereChaineDeCaracteres = 'Bonjour' . $SautDeLigne;

echo $maPremiereChaineDeCaracteres;

$maPremiereChaineDeCaracteres = 'Au revoir';

echo $maPremiereChaineDeCaracteres;

/*
Notes : 
L'opérateur de concaténation est le point .
La concaténation sert à "coller" les chaines de caractères
*/

$prenom ='Bryan';
$piece = 'Kitchen';

$phrase = $prenom . ' is in the ' . $piece;

echo $SautDeLigne;
echo $phrase;

$piece = 'Bathroom';

$autrePhrase ='';  // Chaine de caractères vide
$autrePhrase = $autrePhrase . $prenom;
$autrePhrase = $autrePhrase . ' is in the ';
$autrePhrase = $autrePhrase . $piece;

echo $SautDeLigne;
echo $autrePhrase;


// Opérateur de concaténation "condensé"
$autrePhrase = '';  // J'initialise , un seul égal =
$autrePhrase .= $prenom; // Je remplie, .=
$autrePhrase .= ' is in the ';
$autrePhrase .= $piece;

echo $autrePhrase;


// Cas particuliers de l'apostrophe 
$phrase = 'Je suis à l\'école';
// Utilisation d'un backslash
// Echappement de caractère

// Utilisation d'une doubles quotes
$phrase = "Je suis à l'école et je dis : \"Bonjour\"";


// Publipostage de variables 
$lieu = 'jardin';
$phrase = "Je suis dans le $lieu"; // La variable est exécutée
echo $SautDeLigne;
echo $phrase;

// Identique à :
$phrase = 'Je suis dans le ' . $lieu;

// ------------------------------------------

//Deuxième type de variable, les nombres ENTIERS

$unNombre = 35;
$unAutreNombre = 11;

//Il y a une limite à ce que peut contenir un entier
// PHP n'est pas "très bon" pour gérer des grands nombres

$unNombreNegatif = -7;

// Calculs
// 5 opérateurs importats pour faire des calculs
// Addition : +
// Soustraction : - (tiret du 6)
// Multiplication : * (étoile)
// Division : / (slash)
// Modulo : % (reste de la dévision euclidienne)


$calcul = $unAutreNombre + 9;

echo $SautDeLigne;
echo $calcul;

$calcul = $unAutreNombre - 34;

echo $SautDeLigne;
echo $calcul;

$calcul = $unAutreNombre * $unAutreNombre;

echo $SautDeLigne;
echo $calcul;

$calcul = $unAutreNombre / $unNombre;

echo $SautDeLigne;
echo $calcul;

$calcul = $unAutreNombre + $unNombre + $unNombre + $unAutreNombre;

echo $SautDeLigne;
echo $calcul;

$calcul = $unNombre + ($unAutreNombre * $unNombreNegatif);

echo $SautDeLigne;
echo $calcul;

// On peut faire des opérations mathématiques aussi complexes que nécessaires


$participants = 50;
$tailleDeGroupe = 6;

$participantsSansGroupe = $participants % $tailleDeGroupe;

$nbGroupesComplets = ($participants - $participantsSansGroupe) / $tailleDeGroupe;

//Opérateurs condensés 
// Addition : +=
// Soustraction : -=
// Multiplication : *=
// Division : /=
// Modulo : %=

$somme = 0;
$somme = $somme + 1;
$somme = $somme + 2;
$somme = $somme + 3;

// Version condensé

$somme = 0;
$somme += 1;
$somme += 2;
$somme += 3;

// += et -= sont souvent utilisés
// Les autres beaucoup moins, c'est à l'appréciation du développeur

// Opérateurs d'incrémentation et décrementation

$compteur = 5;
$compteur++; // 6

$autreCompteur = 12;
$autreCompteur--; //11

$a=1;

// Ces 3 lignes font la même chose:

$a = $a +1;
$a +=1;
$a++;

echo $a;

// ----------------------------------------

// 3ème type de varaible : les nombres DECIMAUX

$unNombreDecimal = 23.34;

// Il faut utiliser le . et non la ,

// On peut utiliser tous les opérateurs de calculs sur les nombres décimaux

$unNombreEntier = 34 + 18;
$unNombreDecimal = 34 / 18;

// Quand on manipule des nombres entiers, on peut finir avec des nombres décimaux


// En PHP, on peut "tout" concaténer

$nombre = 34;
$phrase = 'Le SRFC a actuellement' . $nombre . ' points.';

// PHP transforme tout seul le 34 en chaine de caractère pour pouvoir tout concaténer
// Point d'attention, car PHP fait souvent des choses tout seul, ce qui peut entraipner des effets de bord et donc des bugs

echo $phrase;

// ----------------------------------------

// 4ème type de varaible : les BOOLEENS
// 2 valeurs possibles : true / false (Vrai ou Faux)

$vrai = true; // Toujours en minuscule
$faux = false;

