<?php
// REF: https://www.hackerrank.com/challenges/plus-minus/problem

// Complete the plusMinus function below.
function plusMinus($arr, $max)
{
    $countPos = $countNeg = $countNeu = 0;
    for ($i = 0; $i < $max; $i++) {
        if ($arr[$i] > 0) {
            $countPos++;
        }
        if ($arr[$i] == 0) {
            $countNeu++;
        }
        if ($arr[$i] < 0) {
            $countNeg++;
        }
    }

    echo number_format($countPos / $max, 5) . PHP_EOL;
    echo number_format($countNeg / $max, 5) . PHP_EOL;
    echo number_format($countNeu / $max, 5);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr, $n);

fclose($stdin);
