<!-- Algoritma Genetika -->

<!-- 1. membangkitkan kromosom acak [V] -->
<!-- 2. menghitung nilai fitness  [V]-->
<!-- 3. membangkitkan populasi [V] -->
<!-- 4. menseleksi kromosom, mencari kromosom 2 yang terkuat[v]  -->
<!-- 5. Eliminasi kromosom yang lemah[v]  -->
<!-- 6. Crossover antara kromosom terkuat[v] -->
<!-- 7. membuat 2 child hasil crossover 2 kromosom terkuat[v] -->
<!-- 8. Mutasi gen dari 2 child kromosom[v] -->
<!-- 9. Menghitung nilai fitness child kromosom [v] -->
<!-- 10. menambahkan kromosom ke populasi[v] -->
<!-- 11. melakukan looping kembali, sampai mendapatkan hasil yang konvergen (setiap populasi sama)[v] -->

<?php


include 'calculate_fitness.php';
include 'random_individu.php';
include 'generate_populasi.php';
include 'crossover.php';
include 'selection.php';
include 'mutation.php';
include 'regeneration.php';
include 'genetic_algorythm.php';

// begin :: input
$target = trim(fgets(STDIN));
$mutation_rate = 0.1;
$besar_populasi = 10;
// end :: input

// Genetic Algorythm;
$arr = geneticAlgorythm($besar_populasi, $mutation_rate, $target);

?>