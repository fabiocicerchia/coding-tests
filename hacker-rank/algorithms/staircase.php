<?php
// REF: https://www.hackerrank.com/challenges/staircase/problem

// Complete the staircase function below.
function staircase($n)
{
    for ($i = 0; $i < $n; $i++) {
        for ($a = 0; $a < ($n - $i - 1); $a++) {
            echo ' ';
        }
        for ($b = 0; $b < ($i + 1); $b++) {
            echo '#';
        }

        if ($i < $n - 1) {
            echo PHP_EOL;
        }
    }
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);
