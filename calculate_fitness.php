<?php

function calc_fitness($target, $kromosom)
{
    $fitness = 0;
    $logic_math = 0;

    for ($i = 0; $i < strlen($target); $i++) {
        if ($kromosom[$i] == $target[$i]) {
            $logic_math += 1;
        }
    }
    $fitness = ($logic_math / strlen($target)) * 100;
    return $fitness;
};
