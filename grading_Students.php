<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    // Write your code here
    $grade_arr = [];
    for($i = 0; $i < count($grades); $i++){
        switch ($grades[$i]){
            case $grades[$i] < 38:
                array_push($grade_arr,$grades[$i]);
            break;
            case $grades[$i]%5 == 0:
                array_push($grade_arr,$grades[$i]);
            break;
            case $grades[$i]%5 != 0:
                $x = $grades[$i]%5;
                if ($x >= 3){
                    $y = 5-$x;
                  array_push($grade_arr,$grades[$i]+$y);  
                }else{
                  array_push($grade_arr,$grades[$i]);
                }
                
            break;
        }
    }
    return $grade_arr;
    
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
