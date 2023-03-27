<?php

/*
 * Complete the 'compareTriplets' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function compareTriplets($a, $b) {
    // Write your code here
    $a_length = count($a);
    $b_length = count($b);
    $a_count = 0; 
    $b_count = 0;
    for($i = 0; $i < $a_length; $i++){
        if($a[$i] > $b[$i]){
             $a_count = $a_count + 1; 
        }
        if($a[$i] < $b[$i]){
             $b_count = $b_count + 1;
        }
    }
    $data = array($a_count, $b_count);
    return $data;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$b_temp = rtrim(fgets(STDIN));

$b = array_map('intval', preg_split('/ /', $b_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = compareTriplets($a, $b);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
