<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
    $max_number = 1000;
    $max_random_numbers = 15;
    $array_of_numbers = range(0, $max_number);

    shuffle($array_of_numbers);

    $random_numbers = array_slice($array_of_numbers, 0, $max_random_numbers);

    var_dump($random_numbers);
?>