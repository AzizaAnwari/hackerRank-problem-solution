<?php

/*
 * Complete the 'beautifulDays' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER i
 *  2. INTEGER j
 *  3. INTEGER k
 */

function beautifulDays($i, $j, $k) {
    // Write your code 
    $num_array = array();
    $ans = 0;
    for($n = $i; $n <= $j; $n++){
        $string_rev = strrev($n);
        $new_num = ($n - (int)$string_rev)/ $k;
        array_push($num_array,$new_num);
    }
    foreach($num_array as $key => $value){
        if(is_int($value)){
          $ans += 1;   
        }
    }
    return $ans;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$i = intval($first_multiple_input[0]);

$j = intval($first_multiple_input[1]);

$k = intval($first_multiple_input[2]);

$result = beautifulDays($i, $j, $k);

fwrite($fptr, $result . "\n");

fclose($fptr);
