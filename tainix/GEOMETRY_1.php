<?php


$shapes = ['triangle_1', 'hexagon_8', 'hexagon_3', 'pentagon_4', 'hexagon_9', 'square_3', 'triangle_3'];

$somme = 0;

foreach($shapes as $shape) {

    // Je fais mon parsing
    $informations = explode('_', $shape);

    // Je stocke les valeurs dans 2 variables dédiées
    // $shapeName et $ lenghtSide

    $shapeName = $informations[0];
    $lenghtSide = (int)$informations[1]; // Car on récupère '9' sous la forme d'une chaine de caractère et dans notre fonction on veut que lenghtSide soit un int

    // Je calcule le périmètre grâce à ma fonction

    $perimetreForme = perimetre($shapeName, $lenghtSide);

    // J'augmente la valeur de $perimetreTotal

    $somme += $perimetreForme;

}

echo '<p> Résultat : ' . $somme . ' </p>';

function perimetre (string $shapeName, int $lenghtSide) : int 
{
    switch ($shapeName) {
        case 'square' :
            $perimetre = $lenghtSide * 4;
        break;

        case 'triangle' :
            $perimetre = $lenghtSide * 3;
        break;

        case 'hexagon' :
            $perimetre = $lenghtSide * 6;
        break;
        
        case 'pentagon' :
            $perimetre = $lenghtSide * 5;
        break;

        default : 
        // Je vais pouvoir gérer une forme inconnue ici !
            die('Erreur, forme inconnue');
    }

        // Gérer une erreur ? Que se passe t-il si je fais :
        // Perimeter ('circle', 7) ???? 
        
        return $perimetre;
}


// Variante fonction avec tableau
function perimetre2 (string $shapeName, int $lenghtSide) : int 
{
    // Selon le nmo de la forme, je multiplie le côté par 3, 4, 5, ou 6
    $nbSides = [
        'triangle' => 3,
        'square' => 4,
        'pentagon' => 5,
        'hexagon' => 6
    ];

    return $nbSides[$shapeName] * $lenghtSide;
}


echo $somme;


