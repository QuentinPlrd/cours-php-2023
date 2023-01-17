<?php
// Intègre ici tout le contenu de ce fichier
require('heros_fonction.php');

$force = rand(10, 20);
$agilite = rand(10, 20);
$defense = rand(10, 20);
$magie = rand(1, 5);

echo '<p>FORCE : ' .$force . '</p>';
echo '<p>AGILITE : ' .$agilite . '</p>';
echo '<p>DEFENSE : ' .$defense . '</p>';
echo '<p>MAGIE : ' .$magie . '</p>';

$pointsDeVie = 100;

$ennemis = [
    ['nom' => 'Ork', 'puissance' => rand(50, 100)],
    ['nom' => 'Ork', 'puissance' => rand(50, 100)],
    ['nom' => 'Ork', 'puissance' => rand(50, 100)],
    ['nom' => 'Ork', 'puissance' => rand(50, 100)],
];

echo '<pre>';
print_r($ennemis);
echo '</pre>';

// 1. 
// Créer une fonction puissance pour calculer la puissance du héros selon la formule
// Puissance  = force * 2 + agilite + (defense / 2) (arrondi à l'entier)

$power = puissance($force, $agilite, $defense);

echo '<p>PUISSANCE HEROS : ' . $power .'</p>';

// Affronter chaque ennemi en comparant la puissance du héros avec celle de l'ennemi

// Celui qui a le + de puissace gagne (si égalité, je gagne)

// Si je gagne, je gagne 1pt de force
// Si je perds, je perds 1 pt d'agilité et 10 pts e vie

// Ecrire le déroulé des combat

foreach ($ennemis as $monstre) {

    $power = puissance($force, $agilite, $defense);

    if ($power >= $monstre['puissance']) {
        $force ++;
        echo '<p>J\'ai battu '. $monstre['nom'] .' '. $power. '>= ' .$monstre['puissance']. '</p>';
        

    } else {
        $agilite --;
        $pointsDeVie -= 10;
        echo '<p>J\'ai perdu contre '. $monstre['nom'] .' '. $power. '< ' .$monstre['puissance']. '</p>';
    }
}

// 2. Créer une fonction qui génère un ennemi aléatoirement, c'est à dire qui retourne un tableau avec un nom et une puissance. Cette fonction prendre en paramètre un niveau. La puissance de l'ennemi sera alors comprise entre 10 * $niveau et 20 * niveau.
// Chaque ennemi s'appelera "Ork" suivi de 6 caractères majuscules aléatoires
// Regarder du côté str_shuffle et substr

// 3 Faire un "while" pour affronter les ennemis jusqu'à la mort !
// Combien d'ennemi est il possible d'affronter ?
// Tous les 2O ennemis, augmenter le niveau des ennemis créés (on commence 1)
// (Pas de nouvelle fonction à créer)

// On va construire une sécurité pour pouvoir coder le while sans risque 
// Bloqueur

$bloqueur = 0;

// Je reprends la logique de mon programme
$compteurEnnemisCombattus = 0;
$niveauEnnemi = 1;

while ($pointsDeVie > 0) {

    // Je combats un nouvel ennemi

    // 1. Créer ce nouvel ennemi

    $ennemi = creerUnEnnemi($niveauEnnemi);

    // 2. Je recalcule ma puissance

    $power = puissance($force, $agilite, $defense);


    // 3. Je compare les puissances
    // 3.1 Je gagne
    if ($power >= $ennemi['puissance']) {
        // 3.1.1 Mes caractéristiques évoluent
        echo '<p>J\'ai battu '. $ennemi['nom'] .' '. $power. '>= ' .$ennemi['puissance']. '</p>';
        
    // 3.2 Je perds
    } else {
        // 3.2.1 Mes caractérisitques évoluent
        $agilite --;
        $pointsDeVie -= 10;
        echo '<p>J\'ai perdu contre '. $ennemi['nom'] .' '. $power. '< ' .$ennemi['puissance']. '</p>';
    }

    // 4. J'incrémente le compteur d'ennemis combattus
    $compteurEnnemisCombattus ++;
        // 4.1 Tous les 5 ennemis, j'augmente

        if ($compteurEnnemisCombattus%5 == 0) {
            $niveauEnnemi++;
        }

    // Bloqueur
    $bloqueur ++; // A chaque itération, j'incrémente de 1
    if ($bloqueur > 1000) {
        break; // AU bout de 1000 itérations, par sécurité, je casse ma boucle while
    }
}

echo '<p>J\'ai combattu ' . $compteurEnnemisCombattus .' ennemis .</p>';

// Variante pour le while 
// while(true)
// Attention, il  n'y a plus de conditions d'arrêt, donc le bloqueur devient obligatoire en phase de DEV

$bloqueur = 0;

while (true) {

    // Toute la logique du while précédent

    // Conditions d'arrêt
    if ($pointsDeVie <= 0) {
        break;
    }
    // Bloqueur par sécurité
    $bloqueur++;
    if ($bloqueur > 1000) {
        break;
    }
}