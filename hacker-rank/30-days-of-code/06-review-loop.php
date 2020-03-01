<?php
// REF: https://www.hackerrank.com/challenges/30-review-loop/problem

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$tests = fgets($_fp);

for ($i = 0; $i < $tests; $i++) {
    $S = trim(fgets($_fp));
    $N = strlen($S);

    $even = '';
    $odd = '';
    for ($j = 0; $j < $N; $j++) {
        if ($j % 2 == 0) {
            $even .= $S[$j];
        } else {
            $odd .= $S[$j];
        }
    }

    echo "$even $odd" . PHP_EOL;
}
