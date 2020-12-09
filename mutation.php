<?php

function mutation($offspring, $mutation_rate, $target)
{
    for ($i = 0; $i < strlen($offspring); $i++) {
        if ((rand(0, 10) / 10) <= $mutation_rate) {
            $offspring[$i] = chr(random_int(32, 126));
        }
    }

    return $arr = [
        $offspring,
        calc_fitness($target, $offspring)
    ];
}
