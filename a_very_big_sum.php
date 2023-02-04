// In this challenge, you are required to calculate and print the sum of the elements in an array, keeping in mind that some of those integers may be quite // large
// Sample Input
// 5
// 1000000001 1000000002 1000000003 1000000004 1000000005
// Output
// 5000000015

/*
 * Complete the 'aVeryBigSum' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts LONG_INTEGER_ARRAY ar as parameter.
 */

function aVeryBigSum($ar) {
    // Write your code here
    $ar_length = count($ar);
    $sum = 0;
    for ($i = 0 ; $i < $ar_length ; $i++ ){
        $sum = $sum + $ar[$i];
    }
    return $sum;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$ar_count = intval(trim(fgets(STDIN)));

$ar_temp = rtrim(fgets(STDIN));

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar);

fwrite($fptr, $result . "\n");

fclose($fptr);
