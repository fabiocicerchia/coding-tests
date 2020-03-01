<?php
// REF: https://www.hackerrank.com/challenges/30-nested-logic/problem

$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$actual = \DateTime::createFromFormat('j n Y', trim(fgets($_fp)));
$expected = \DateTime::createFromFormat('j n Y', trim(fgets($_fp)));

$diffDays = $actual->diff($expected)->d;
$diffMonths = $actual->diff($expected)->m;

$fine = 10000;
if ($actual <= $expected) {
    $fine = 0;
} elseif ($diffDays > 0 && $actual->format('mY') === $expected->format('mY')) {
    $fine = $diffDays * 15;
} elseif ($diffMonths > 0 && $actual->format('Y') === $expected->format('Y')) {
    $fine = $diffMonths * 500;
}

echo $fine;
