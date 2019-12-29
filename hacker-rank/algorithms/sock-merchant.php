<?php
// REF: https://www.hackerrank.com/challenges/sock-merchant/problem

// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {
    $totalPairs = 0;
    $pairs = [];

    foreach($ar as $item) {
        if (!isset($pairs[$item])) $pairs[$item] = 0;
        $pairs[$item]++;
        if ($pairs[$item] % 2 == 0) $totalPairs++;
    }

    return $totalPairs;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
