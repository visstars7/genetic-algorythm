<?php

function crossover($parent1, $parent2)
{
    $CP = round(strlen($parent1[1]) / 2);

    $offspring1 = substr($parent1[1], 0, $CP) . substr($parent2[1], $CP);
    $offspring2 = substr($parent1[1], $CP) . substr($parent2[1], 0, $CP);

    return $offsprings = [$offspring1, $offspring2];
}
