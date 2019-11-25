<?php
// REF: https://www.hackerrank.com/challenges/time-conversion/problem

/*
* Complete the timeConversion function below.
*/
function timeConversion($s)
{
    if (substr($s, 0, 2) == 12) {
        $s = '00' . substr($s, 2);
    }
    if (substr($s, -2, 2) === 'PM') {
        $hours = (int) substr($s, 0, 2) + 12;
        $s = $hours . substr($s, 2);
    }
    $s = substr($s, 0, -2);

    return $s;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);
