<?php
// On va raconter une histoire...
$histoire = '' ; // On fait un seul echo à la fin (déjà écrit)
$nomDuHeros = 'Batman'; // A choisir
$distanceParcourue = 0;

// 1. Racontez comment s'appelle le héros, en complétant la variable $histoire, utilisez un peu d'html : hX, p, b, etc.


$histoire .= '<h1>Début de l\'aventure</h1>';
$histoire .= '<h4>Le héros s\'appelle ' . $nomDuHeros . ' et habite dans la célèbre ville de Gotham </h4>';
$histoire .= '<p> Il est connu pour faire le bien sur cette ville et lutte réuglièrement contre le JOKER </p>';

// On va définir quelques valeurs aléatoirement
$force = rand(1, 10);
$agilite = rand(1, 10);
$piecesDOr = rand(50, 100);

// $force = 7;
// $agilite = 5;
// $piecesDOr = 60;

$NbJourDeLaSemaine = rand(1, 7);
$joursDeLaSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];

echo '<pre>';
print_r($joursDeLaSemaine);
echo '</pre>';

//
// Exercices autour du if
// (Complétez l'histoire à chaque fois qu'il se passe quelque chose)
//

// 2.
// Si la force est supérieure à 8, alors je gagne 1 point d'agilité.

$histoire .= '<p>2. Ma force est de ' . $force .'</p>';

if ($force > 8){
    $agilite++;
    $histoire .= '<p>Je gagne un point d\'agilité, mon agilité est maintenant de ' .$agilite . '</p>';
} 

// 3.
// Si ma force est inférieure à 6, je passe par le chemin de gauche, qui fait 500m, sinon je passe par le chemin de droite, qui fait 850m.
// Dans le chemin de droite, je trouve 4 pieces d'or 

$histoire .= '<p>3. Ma force est de ' . $force .'</p>';
if ($force < 6) {
    //Chemin gauche
    $distanceParcourue += 500; 
    $histoire .= '<p>Je passe par la gauche, j\'ai parcourru : ' . $distanceParcourue .' m</p>';
} else {
    //Chemin droite
    $distanceParcourue += 850;
    $piecesDOr +=4;
    $histoire .= '<p> Je passe par le chemin de droite, j\'ai parcourru : ' . $distanceParcourue . 'm et j\' ai trouvé de l\'or </p>';
} 

// 4.
// Je parcours 150m
// Si j'ai plus de 80 pièces d'or, j'en dépense 30 pour m'offrir 2 points d'agilité
// Si j'en ai moins de 80 et + de 60, j'en dépense 15 pour m'offrir 1 point d'agilité
// Si j'en ai moins de 60, j'en dépense 5 pour m'offrir 1 point de force

$distanceParcourue += 150;
$histoire .= '<p>4 . J\'ai ' . $piecesDOr . ' pièces et j\'ai parcourru : ' . $distanceParcourue . ' m.</p>';

if ($piecesDOr > 80) {
    $piecesDOr -= 30;
    $agilite += 2;
    $histoire .= '<p>Cas 1 : PO-30, A+2 </p>';

} elseif ($piecesDOr > 60) {    
    $piecesDOr -= 15;
    $agilite++;
    $histoire .= '<p>Cas 2 : PO-15, A+1</p>';

} else {
    $piecesDOr -=5;
    $force++;
    $histoire .= '<p>CAS 3 : PO-5, F+1</p>';
}

// 5. 
// Je parcours 300m
// Si ma force et mon agilité sont supérieures à 6, je gagne 10 pièce d'or
// Si ma force ou mon agilité est inférieure à 3, je perds 10 pièces d'or
// (stockez les conditions dans des variables)

        //Exemple 
        // $assezDePiece = ($piecesDOr > 80);
        // $moyenDePiece = ($piecesDOr <= 80 && $piecesDOr > 60);

        // if($assezDePiece) {

        // }


$distanceParcourue += 300;
$histoire .= '<p>5. FORCE : ' . $force . ' AGILITE : ' . $agilite . '</p>';
$histoire .= '<p> J\'ai parcourru ' . $distanceParcourue . '</p>';
$conditionsPourGagnerDesPieces = ($force > 6 && $agilite > 6);
$conditionsPourPerdreDesPieces = ($force < 3 || $agilite < 3);

if ($conditionsPourGagnerDesPieces) {
    $piecesDOr += 10;

    $histoire .= '<p>CAS 1 : F et A haut . PO+10</p>';
}

if ($conditionsPourPerdreDesPieces) {
    $piecesDOr -=10;

    $histoire .= '<p>CAS 2 : F et A bas . PO-10</p>';

}

if (!$conditionsPourGagnerDesPieces && !$conditionsPourPerdreDesPieces) {
    $histoire .= '<p>Il ne se passe rien</p>';
    
}


// 6.
// Indiquez dans l'histoire quel jour nous sommes

$jour = $joursDeLaSemaine[$NbJourDeLaSemaine - 1];
$histoire .= '<p>6. Cette histoire ce passe le ' . $jour . '</p>';


// 7.
// Si je suis en début de semaine (lundi, mardi, mercredi) je me rends à ma destination par un chemin de 740m, et je gagne 1 point de force
// Si je suis en fin de semaine (les autres jours), je me rends à ma destination par un chemin de 1345m, et je perds 1 point d'agilité


//PAS LA MEILLEURE CAS C'est pas très explicite la condition
// if ($NbJourDeLaSemaine <= 3) {
//     $distanceParcourue += 740;
//     $force++;
//     $histoire .= '<p>7. J\'ai parcourru au total ' . $distanceParcourue . ' m & J\'ai maintenant : ' . $force .' FORCE' . '</p>';

// } else {
//     $distanceParcourue += 1345;
//     $agilite --;
//     $histoire .= '<p>7. J\'ai parcourru au total ' . $distanceParcourue . ' m & J\'ai maintenant : ' . $agilite .' AGILITE' . '</p>';

// }

//Version avec switch

switch ($jour) {

    case 'Lundi' : 
    case 'Mardi' :
    case 'Mercredi' :
        //Bloc d'instruction 
        $distanceParcourue += 740;
        $force++;
        $histoire .= '<p>7. Debut de semaine, j\'ai parcourru ' .$distanceParcourue . '</p>';

        break;

        // ------------------
    default :
        //Bloc d'instruction 
        $distanceParcourue += 1345;
        $agilite --;
        $histoire .= '<p>7. Fin de semaine, j\'ai parcourru ' .$distanceParcourue . '</p>';
        // ------------------
        break;
}



// 8. A l'aide d'un "if elseif elseif..." déterminer la tranche de 20, dans laquelle se trouve le nombre de pièces d'or (0-20; 21-40; 41-60; jusque 100)
// Gérez le cas où il y aurait plus de 100 pièces également

$histoire .= '<p>8. NOMBRE DE PIECES : ' . $piecesDOr .'</p>';

if ($piecesDOr >= 0 && $piecesDOr < 21){
    $histoire .= '<p>J\'ai peu de pièces, j\'ai seulement ' . $piecesDOr .' pièces </p>';

} elseif ($piecesDOr >= 21 && $piecesDOr <41 ) {
    $histoire .= '<p>J\'ai un peu de pièces, je n\'ai que ' . $piecesDOr .' pièces </p>';

} elseif ($piecesDOr >=41 && $piecesDOr <61) {
    $histoire .= '<p>J\'ai plein de pièces, j\'ai ' . $piecesDOr .' pièces </p>';

} elseif ($piecesDOr >=61 && $piecesDOr <81) {
    $histoire .= '<p>J\'ai beaucoup de  pièces, j\'ai ' . $piecesDOr .' pièces</p>';

} elseif ($piecesDOr >=81 && $piecesDOr <100) {
    $histoire .= '<p>Je suis riche, j\'ai' . $piecesDOr .' pièces</p>';
} else {
    $histoire .= '<p>J\'ai plus de 100 pièces , j\'ai ' . $piecesDOr .' pièces</p>';
}

echo $histoire;