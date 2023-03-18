<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($n , $arr) {
    // Write your code here
    $arr_first = 0;
    $arr_last = 0;
    $x = $n - 1;
    for($i = 0; $i < $n; $i++){
        $arr_first += $arr[$i][$i];
        $arr_last += $arr[$i][$x]; 
        $x--;
    }
    return abs($arr_first - $arr_last);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($n , $arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
