<?php

/*
 * Complete the 'angryProfessor' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER k
 *  2. INTEGER_ARRAY a
 */

function angryProfessor($k, $a) {
    // Write your code here
    $array_length = count($a);
    $yes = 0;
    $no = 0;
    $ans;
    for($i = 0; $i < $array_length; $i++){
       if($a[$i] > 0){
            $yes += 1;
        }else{
            $no += 1;
        } 
    }
    
    if($no >= $k){
        $ans = "NO";
    }else{
        $ans = "YES";
    }
    return $ans;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $n = intval($first_multiple_input[0]);

    $k = intval($first_multiple_input[1]);

    $a_temp = rtrim(fgets(STDIN));

    $a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = angryProfessor($k, $a);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
