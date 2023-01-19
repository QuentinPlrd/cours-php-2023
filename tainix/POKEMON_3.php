<?php

define('EAU', 'eau');
define('FEU', 'feu');
define('HERBE', 'herbe');
define('RARE', 'rare');
define('AIR', 'air');
define('POISON', 'poison');
define('GLACE', 'glace');
define('PSYCHIQUE', 'psychique');
define('INSECTE', 'insecte');

$pokemons = ['Eau:36', 'Insecte:92', 'Eau:13', 'Eau:19', 'Air:66', 'Herbe:18', 'Herbe:33', 'Psychique:89', 'Eau:23', 'Glace:59', 'Feu:33', 'Poison:59', 'Feu:12', 'Herbe:44', 'Feu:32', 'Feu:30', 'Eau:45', 'Feu:29', 'Psychique:40', 'Insecte:57', 'Eau:27', 'Herbe:49', 'Eau:23', 'Herbe:16', 'Eau:49', 'Feu:36', 'Glace:76'];

$herbes = filtreLesPokemons($pokemons, HERBE);
$feux = filtreLesPokemons($pokemons, FEU);
$eaux = filtreLesPokemons($pokemons, EAU);
$rares = filtreLesPokemons($pokemons, RARE);

$top1 = $herbes[0] + $feux[0] + $eaux[0] + $rares[0];
$top2 = $herbes[1] + $feux[1] + $eaux[1] + $rares[1];
$top3 = $herbes[2] + $feux[2] + $eaux[2] + $rares[2];

echo $top1 + $top2 + $top3;

// Fonction

function filtreLesPokemons(array $pokemons, string $type): array
{
    // 1. Définir quel(s) type(s) on garde

    if($type === RARE){
        $authorisedTypes = [AIR, POISON, GLACE, PSYCHIQUE, INSECTE];
    }
    else {
        $authorisedTypes = [$type];
    }

    // 2. Initialiser notre retour

    $forces = [];

    // 3. Boucler sur $pokemon

    foreach ($pokemons as $pokemon) {
        // Parsing
        [$pokemonType, $pokemonForce] = explode(':', $pokemon);

        // PAREIL QUE
        // $informations = explode(':', $pokemon);
        // $types = $informations[0];
        // $puissances = $informations[1];

        // Conserver ce qui nous intéresse, avec in_array
        if (in_array($pokemonType, $authorisedTypes)) {
            $forces[] = $pokemonForce;
        }
    }

    rsort($forces);

    // 4. Return

    return $forces;

};

$essai = filtreLesPokemons($pokemons, HERBE);
echo '<pre />';
print_r($essai);
echo '<pre />';

function lePokemonLePlusFort(array $pokemons, string $type)
{
    return max(filtreLesPokemons($pokemons, $type));
};

$essai = lePokemonLePlusFort($pokemons, HERBE);
echo '<pre />';
print_r($essai);
echo '<pre />';

$sommePuissance = 
    lePokemonLePlusFort($pokemons, EAU) +
    lePokemonLePlusFort($pokemons, FEU) +
    lePokemonLePlusFort($pokemons, HERBE) +
    lePokemonLePlusFort($pokemons, RARE); 

echo $sommePuissance;