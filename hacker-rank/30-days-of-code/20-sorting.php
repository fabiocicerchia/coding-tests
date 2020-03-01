<?php
// REF: https://www.hackerrank.com/challenges/30-sorting/problem

$handle = fopen("php://stdin", "r");
fscanf($handle, "%d", $n);
$a_temp = fgets($handle);
$a = explode(" ", $a_temp);
$a = array_map('intval', $a);
// Write Your Code Here

function swap(&$a, &$b)
{
    $tmp = $a;
    $a = $b;
    $b = $tmp;
}

$numSwaps = 0;
for ($i = 0; $i < $n; $i++) {
    // Track number of elements swapped during a single array traversal
    $numberOfSwaps = 0;

    for ($j = 0; $j < $n - 1; $j++) {
        // Swap adjacent elements if they are in decreasing order
        if ($a[$j] > $a[$j + 1]) {
            swap($a[$j], $a[$j + 1]);
            $numberOfSwaps++;
            $numSwaps++;
        }
    }

    // If no elements were swapped during a traversal, array is sorted
    if ($numberOfSwaps == 0) {
        break;
    }
}

echo "Array is sorted in $numSwaps swaps." . PHP_EOL;
echo "First Element: " . $a[0] . PHP_EOL;
echo "Last Element: " . $a[$n - 1] . PHP_EOL;
