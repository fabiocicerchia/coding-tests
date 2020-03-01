<?php
// REF: https://www.hackerrank.com/challenges/30-bitwise-and/problem

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $nk_temp);
    $nk = explode(' ', $nk_temp);

    $n = intval($nk[0]);

    $k = intval($nk[1]);

    $s = range(1, $n);
    $max = 0;
    for ($i = 0; $i < $n; $i++) {
        $a = $s[$i];
        for ($j = $i + 1; $j < $n; $j++) {
            $b = $s[$j];
            $and = $a & $b;
            if ($and > $max && $and < $k) {
                $max = $and;
            }
        }
    }
    echo $max . PHP_EOL;
}

fclose($stdin);
