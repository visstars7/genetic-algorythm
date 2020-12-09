<?php

function selection($populasi)
{
    $index1 = array_search(max($populasi->fitness), $populasi->fitness);
    $parent1 = [$populasi->fitness[$index1], $populasi->kromosom[$index1]];
    array_splice($populasi->fitness, $index1, 1);
    array_splice($populasi->kromosom, $index1, 1);


    $index2 = array_search(max($populasi->fitness), $populasi->fitness);
    $parent2 =  [$populasi->fitness[$index2], $populasi->kromosom[$index2]];
    array_splice($populasi->fitness, $index2, 1);
    array_splice($populasi->kromosom, $index2, 1);


    return $best = [$parent1, $parent2];
};
