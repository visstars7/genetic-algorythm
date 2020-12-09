<?php

function regeneration($populasi, $parent1, $parent2, $mutant1, $mutant2)
{
    // membuang kromosom lemah

    for ($i = 1; $i <= 2; $i++) {
        $index = array_search(min($populasi->fitness), $populasi->fitness);
        array_splice($populasi->fitness, $index, 1);
        array_splice($populasi->kromosom, $index, 1);
    }



    // menambahkan parent dan mutant
    // 

    $n = count($populasi->fitness);
    $populasi->kromosom[$n] = $parent1[1];
    $populasi->fitness[$n] = $parent1[0];
    $populasi->kromosom[$n + 1] = $parent2[1];
    $populasi->fitness[$n + 1] = $parent2[0];

    $n = count($populasi->fitness);
    $populasi->kromosom[$n] = $mutant1[0];
    $populasi->fitness[$n] = $mutant1[1];
    $populasi->kromosom[$n + 1] = $mutant2[0];
    $populasi->fitness[$n + 1] = $mutant2[1];
};
