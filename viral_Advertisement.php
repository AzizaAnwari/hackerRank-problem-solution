<?php

/*
 * Complete the 'viralAdvertising' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER n as parameter.
 */

function viralAdvertising($n) {
    // Write your code here
    $shared = 0;
    $liked = 0;
    $cumalative = 0;
    for($i = 0; $i < $n; $i++){
        if($i > 0){
            $shared = round(($shared/2),0,PHP_ROUND_HALF_DOWN)*3;
        }else{
            $shared = 5;
        }
        $liked = round(($shared/2),0,PHP_ROUND_HALF_DOWN);
        $cumalative += $liked;
    }
    return $cumalative;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$result = viralAdvertising($n);

fwrite($fptr, $result . "\n");

fclose($fptr);
