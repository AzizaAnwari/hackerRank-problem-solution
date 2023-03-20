<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    $n = count($arr);
    $a = 0;
    $b = 0;
    $c = 0;
    for($i = 0; $i < $n ; $i++ ){
        if($arr[$i] > 0){
            $a += 1; 
        }elseif($arr[$i] < 0){
            $b += 1;  
        }else{
            $c += 1; 
        }
    }
    print($a/$n.PHP_EOL);
    print($b/$n.PHP_EOL);
    print($c/$n);

}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
