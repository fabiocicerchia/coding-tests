<?php
// REF: https://www.hackerrank.com/challenges/mini-max-sum/problem

// Complete the miniMaxSum function below.
function miniMaxSum($arr)
{
    $min = $max = $arr[0];
    for ($i = 0, $count = count($arr), $sum = 0; $i < $count; $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
        }
        if ($max < $arr[$i]) {
            $max = $arr[$i];
        }
        $sum += $arr[$i];
    }

    echo ($sum - $max) . ' ' . ($sum - $min);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);

fclose($stdin);
