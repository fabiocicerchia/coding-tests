<?php
// REF: https://www.hackerrank.com/challenges/simple-array-sum/problem

/*
* Complete the simpleArraySum function below.
*/
function simpleArraySum($ar, $max)
{
    for ($i = 0, $sum = 0; $i < $max; $i++) {
        $sum += $ar[$i];
    }

    return $sum;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = simpleArraySum($ar, $ar_count);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
