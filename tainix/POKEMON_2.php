<?php

$pokemons = ['Feu:13', 'Herbe:12', 'Eau:32', 'Glace:33', 'Poison:33', 'Eau:25', 'Eau:42', 'Glace:73', 'Herbe:34', 'Feu:41', 'Glace:62', 'Herbe:26'];


// A la manière de filtre les multiples, on fera une fonction : 
// filtreLesPokemons, selon leur type
// En amont, créer des constantes pour les types

// Puis utiliser la fonction max()


// Tu dois donc trouver la meilleure équipe de Pokemon en prenant le meilleur Pokemon à chaque fois pour constituer ton équipe. C’est-à-dire le pokemon qui a la puissance la + élevée.

// Tu dois retourner la somme des puissances des Pokemons retenus.

define('EAU', 'eau');
define('FEU', 'feu');
define('HERBE', 'herbe');
define('RARE', 'rare');
define('AIR', 'air');
define('POISON', 'poison');
define('GLACE', 'glace');
define('PSYCHIQUE', 'psychique');
define('INSECTE', 'insecte');

$sommePuissance = 0;

$essai = filtreLesPokemons($pokemons, HERBE);
// => [42, 20, 24]
echo '<pre>';
print_r($essai);
echo '</pre>';

function filtreLesPokemons(array $pokemons, string $type) : array {

    // 1. Définir quel(s) type(s) on garde

    if($type === RARE){
        $authorisedTypes = [AIR, POISON, GLACE, PSYCHIQUE, INSECTE];
    } else {
        $authorisedTypes = [$type];
    };

    // 2. Initialiser notre retour

    $forces = [];

    // 3. Boucler sur $pokemons

    foreach ($pokemons as $pokemon) {
        // Parsing
        $informations = explode(':', $pokemon);
        $types = $informations[0];
        $puissance = $informations[1];
        // Plus simple que le parsing : Le multi attribution :
            // [$pokemonType, $pokemonForce] = explode(':', $pokemon)
        // Conserver que ce qui nous intéresse, avec in_array

        if (in_array($types, $authorisedTypes )) {
            $forces[] = $puissance;
        }
    }

    // 4. Return

    return $forces;
}

function lePokemonLePlusFort(array $pokemons, string $type) 
{
    // En 1 seule ligne

    return max(filtreLesPokemons($pokemons, $type));
}

$sommePuissance =
    lePokemonLePlusFort($pokemons, EAU) +
    lePokemonLePlusFort($pokemons, FEU) + 
    lePokemonLePlusFort($pokemons, HERBE) + 
    lePokemonLePlusFort($pokemons, RARE);


echo $sommePuissance;

