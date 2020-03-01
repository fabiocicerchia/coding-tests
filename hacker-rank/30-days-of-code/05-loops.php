<?php
// REF: https://www.hackerrank.com/challenges/30-loops/problem

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fclose($stdin);

for ($i = 1; $i <= 10; $i++) {
    printf("%d x %d = %d" . PHP_EOL, $n, $i, ($i * $n));
}
