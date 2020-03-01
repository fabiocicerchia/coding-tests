<?php
// REF: https://www.hackerrank.com/challenges/30-2d-arrays/problem

$stdin = fopen("php://stdin", "r");

$arr = array();

for ($i = 0; $i < 6; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

fclose($stdin);

function hourglass_sum($array, $x, $y)
{
    $sum = $array[$y][$x];
    $sum += $array[$y][$x+1];
    $sum += $array[$y][$x+2];
    $sum += $array[$y+1][$x+1];
    $sum += $array[$y+2][$x];
    $sum += $array[$y+2][$x+1];
    $sum += $array[$y+2][$x+2];

    return $sum;
}

$max = -9*7; // minimum negative value
for ($x = 0; $x < 4; $x++) {
    for ($y = 0; $y < 4; $y++) {
        $sum = hourglass_sum($arr, $x, $y);
        if ($sum > $max) {
            $max = $sum;
        }
    }
}
echo $max;
