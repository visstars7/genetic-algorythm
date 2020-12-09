<?php

function geneticAlgorythm($besar_populasi, $mutation_rate, $target)
{
    // membangkitkan populasi
    $populasi = populasi($besar_populasi, $target);

    $generasi = 0;
    $iterasi = true;


    while ($iterasi) {

        //  menseleksi kromosom
        [$parent1, $parent2] = selection($populasi);

        // crossover antar parent
        [$offspring1, $offspring2] = crossover($parent1, $parent2);

        // mutasi offspring
        $mutant1 = mutation($offspring1, $mutation_rate, $target);
        $mutant2 = mutation($offspring2, $mutation_rate, $target);

        // regenerasi
        regeneration($populasi, $parent1, $parent2, $mutant1, $mutant2);

        $generasi++;

        // terminasi
        $index = array_search(max($populasi->fitness), $populasi->fitness);
        $the_best_solution = $populasi->fitness[$index];

        if ($the_best_solution == 100) {
            $iterasi = false;
            $status = 'founded';
        }

        // begin:: output
        echo "Kromosom Terkuat: index Ke-" . $index . "\n";
        echo "generasi Ke-" . $generasi . "\n";
        echo "target: " . $populasi->kromosom[$index] . "\n";
        echo "fitness: " . $the_best_solution . "\n";
        system('clear');
        // end:: output

    }

    echo "Kromosom Terkuat: index Ke-" . $index . "\n";
    echo "generasi Ke-" . $generasi . "\n";
    echo "target: " . $populasi->kromosom[$index] . "\n";
    echo "fitness: " . $the_best_solution . "\n";
    echo "status: " . $status . "\n";
};
