<?php
// REF: https://www.hackerrank.com/challenges/30-arrays/problem

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

fclose($stdin);

$max = count($arr);
for ($i = $max - 1; $i >= 0; $i--) {
    echo $arr[$i] . ' ';
}
