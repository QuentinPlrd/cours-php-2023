<?php
// 1 tableau permet de stocker et manipuler plusieurs valeurs
// Premier type de tableau : "auto-indexé"

$tableau = [1, 2, 3]; //valeurs spératées par des virgules

// Auto indexé car on n'a pas définit manuellement les index. Et ils sont donc numériques, commençant par 0. Et en s'incrémentant de 1 en 1.

// Affichage d'un tableau :
// echo ne fonctionne pas pour tableau


$tableau = [0, 3, 6, 9, 11, 32, 321, 48, 98, 124];
echo '<pre>';
print_r($tableau);
echo '</pre>';


// Important : dans un tableau auto-indexé, on ne mélange pas les types de valeurs

// On évitera d'avoir des tableaux commes ça 
// $tableau = ['Bonjour', 2, 4, 34, 'Salut'];
// Dans un tableau je peux mettre du texte, des nombres et d'autres tableaux !

$tableauAPlusieursDimensions = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
]; // Ecris sur plusieurs lignes pour de + lisibilité

echo '<pre>';
print_r($tableauAPlusieursDimensions);
echo '</pre>';

// Accéder à une valeur précise d'un tableau
// Pour ça, on va utiliser les index

echo $tableau[6]; //321
// echo $tableau[10]

echo '</br>';
echo $tableauAPlusieursDimensions[0][2]; //3
echo '</br>';
echo $tableauAPlusieursDimensions[1][1]; //5

// La ligne de code ci-dessous renvoie une erreur car $tableauAPlusieursDimensions[0] est un tableau 
// echo $tableauAPlusieursDimensions[0]

// -------------------------------------

// Deuxième type de tableau : index manuels 

$eleves = [
    'prenom' => 'quentin',
    'age' => 22,
    'statut' => 'etudiant',
    'lagages_preferes' => ['HTML', 'CSS']
];

// Les index : 
// Chaine de caractères 
// Pas de caractères spéciaux
// Ecrits en snake_case (tout en minuscule avec des underscore)

echo '<pre>';
print_r($eleves);
echo '</pre>';

$phrase = 'Je m\'appelle ' . $eleves['prenom'] . ' j\'ai ' . $eleves['age'] . ' ans. ' . 'Je suis ' . $eleves['statut'];

echo  $phrase;