<?php
// REF: https://www.hackerrank.com/challenges/30-running-time-and-complexity/problem

function is_prime($n)
{
    if ($n === 1) {
        return false;
    } // it doesn't count for itself and 1 (as two separate numbers)

    $max = sqrt($n);
    for ($i = 2; $i <= $max; $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$max = intval(fgets($_fp));

for ($i = 0; $i < $max; $i++) {
    $n = intval(fgets($_fp));

    if (is_prime($n)) {
        echo "Prime";
    } else {
        echo "Not prime";
    }

    if ($i < $max - 1) {
        echo PHP_EOL;
    }
}
