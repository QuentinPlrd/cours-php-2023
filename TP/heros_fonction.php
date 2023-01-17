<?php
declare(strict_types=1);

function puissance (int $force, int $agilite, int $defense) : int
{
    $power = $force * 2;
    $power += $agilite;

    $power += (int) round($defense/2);

    return $power;
}

function creerUnEnnemi(int $niveau) : array
{   
    $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $alphabet = str_shuffle($alphabet);
    $nom = substr($alphabet, 0, 6);
    $puissance = rand(10*$niveau, 20*$niveau);


    return[
        'nom' => 'Ork' . $nom,
        'puissance' => $puissance
    ];

    // alternative 

    // on creer une variable ennemi 
    // $ennemi = ['puissance' => 'Ork' . $nom
    // 'nom' => $puissance]
    // return $ennemi
}

$ennemiDeNiveau1 = creerUnEnnemi(1);
$ennemiDeNiveau2 = creerUnEnnemi(2);