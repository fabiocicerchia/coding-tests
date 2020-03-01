<?php
// REF: https://www.hackerrank.com/challenges/30-binary-numbers/problem

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fclose($stdin);

if ($n <= 0) {
    echo 0;
} else {
    $bin = decbin($n);
    $max = strlen($bin);
    $consecutives = [];
    $consecutive = 0;
    for ($i = 0; $i < $max; $i++) {
        if ($bin[$i] == '1') {
            $consecutive++;
        } else {
            $consecutives[] = $consecutive;
            $consecutive = 0;
        }
    }
    $consecutives[] = $consecutive;
    echo max($consecutives);
}
