<?php
// On va raconter une histoire...
$histoire = '<h1>Bienvenu à Gottham, la ville du célèbre héros Batman</h1>' ; // On fait un seul echo à la fin (déjà écrit)
$nomDuHeros = 'Batman'; // A choisir
$distanceParcourue = 0;

// 1. Racontez comment s'appelle le héros, en complétant la variable $histoire, utilisez un peu d'html : hX, p, b, etc.
// On va définir quelques valeurs aléatoirement

$force = rand(1, 10);
$agilite = rand(1, 10);
$piecesDOr = rand(50, 100);
$NbJourDeLaSemaine = rand(1, 7);
$joursDeLaSemaine = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
//
// Exercices autour du if
// (Complétez l'histoire à chaque fois qu'il se passe quelque chose)
//
// 2.
// Si la force est supérieure à 8, alors je gagne 1 point d'agilité.

echo '<p>FORCE :' . $force . ' </p>';
echo '<p>AGILITE :' . $agilite . '</p>';


if ($force > 8){
    $agilite++;
} echo '<p> Nouvelle agilité ' . $agilite . '</p>';

// 3.
// Si ma force est inférieure à 6, je passe par le chemin de gauche, qui fait 500m, sinon je passe par le chemin de droite, qui fait 850m, je trouve 4 pieces d'or 


if ($force < 6) {
    $distanceParcourue += 500; 
    $histoire .= 'Je passe par la gauche';
} else {
    $distanceParcourue += 850;
    $piecesDOr +=4;
    $histoire .= '<p> Je passe par le chemin de droite, j\' ai trouvé de l\'or</p>';
} 




// Dans le chemin de droite, je trouve 4 pièces d'or
// 4.
// Je parcours 150m
// Si j'ai plus de 80 pièces d'or, j'en dépense 30 pour m'offrir 2 points d'agilité
// Si j'en ai moins de 80 et + de 60, j'en dépense 15 pour m'offrir 1 point d'agilité
// Si j'en ai moins de 60, j'en dépense 5 pour m'offrir 1 point de force

$histoire .= '<p>4 . J\'ai' . $piecesDOr . 'pièces.</p>';

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

$conditionsPourGagnerDesPieces = ($force > 6 && $agilite > 6);
$conditionsPourPerdreDesPieces = ($force < 3 && $agilite < 3);

if ($conditionsPourGagnerDesPieces) {
    $piecesDOr += 10;

    $histoire .= '<p>CAS 1 : F et A haut . PO+10</p>';
}

if ($conditionsPourPerdreDesPieces) {
    $piecesDOr -=10;

    $histoire .= '<p>CAS 2 : F et A bas . PO-10</p>';

}

if (!$conditionsPourGagnerDesPieces && !$conditionsPourPerdreDesPieces) {
    
}






// 6.
// Indiquez dans l'histoire quel jour nous sommes
// 7.
// Si je suis en début de semaine (lundi, mardi, mercredi) je me rends à ma destination par un chemin de 740m, et je gagne 1 point de force
// Si je suis en fin de semaine (les autres jours), je me rends à ma destination par un chemin de 1345m, et je perds 1 point d'agilité
// 8. A l'aide d'un "if elseif elseif..." déterminer la tranche de 20, dans laquelle se trouve le nombre de pièces d'or (0-20; 21-40; 41-60; jusque 100)
// Gérez le cas où il y aurait plus de 100 pièces également
echo $histoire;