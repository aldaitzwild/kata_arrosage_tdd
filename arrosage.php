<?php
/**
 * Créer une fonction arroser() qui le tableau qui suit en paramètre et arrose 
 * chaque plante de 20cl et fait donc augmenter leur niveau d'eau d'autant.
 * 
 * Puis hors de la fonction afficher les plantes par ordre alphabétique
 * et leur nouveau niveau d'eau
 */

 function arroser(array $plants): array
 {
    for ($i=0; $i < count($plants); $i++) { 
        $plants[$i]['waterLevel'] += 20;
    }

    return $plants;
 }

$plants = [
    ['name'=> 'Ficus', "waterLevel" => 54 ],
    ['name'=> 'Cactus', "waterLevel" => 18 ],
    ['name'=> 'Monstera', "waterLevel" => 37 ],
    ['name'=> 'Plante-paon', "waterLevel" => 23 ],
    ['name'=> 'Aglaonème', "waterLevel" => 68 ],
    ['name'=> 'Echeveria', "waterLevel" => 41 ],
    ['name'=> 'Hortensia', "waterLevel" => 7 ],
];

$plants = arroser($plants);

usort($plants, function ($a, $b) {
    return ($a['name'] < $b['name']) ? -1 : 1;
});

foreach($plants as $plant) {
    echo $plant['name'] . ' - eau : ' . $plant['waterLevel'] . PHP_EOL;
}

