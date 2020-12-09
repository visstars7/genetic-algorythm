<?php

function populasi($besar_populasi, $target)
{

    // sebagai wadah populasi
    class populasi
    {
        public $kromosom;
        public $fitness;
    }

    $populasi = new populasi();

    // proses memasukkan value 
    for ($i = 0; $i < $besar_populasi; $i++) {
        // membangkitkan random kromosom
        $kromosom = random_individu($target);

        $populasi->kromosom[$i] = $kromosom;
        // hitung fitness kromosom
        $populasi->fitness[$i] = calc_fitness($target, $kromosom);
    }
    return $populasi;
}
