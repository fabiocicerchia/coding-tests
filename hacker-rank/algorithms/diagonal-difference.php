<?php
// REF: https://www.hackerrank.com/challenges/diagonal-difference/problem

/*
* Complete the 'diagonalDifference' function below.
*
* The function is expected to return an INTEGER.
* The function accepts 2D_INTEGER_ARRAY arr as parameter.
*/

function diagonalDifference($arr, $max)
{
    $sum1 = $sum2 = 0;
    for ($i = 0; $i < $max; $i++) {
        $sum1 += $arr[$i][$i];
        $sum2 += $arr[$i][$max - $i - 1];
    }

    return abs($sum1 - $sum2);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}
$result = diagonalDifference($arr, $n);

fwrite($fptr, $result . "\n");

fclose($fptr);
