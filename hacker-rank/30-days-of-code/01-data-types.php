<?php
// REF: https://www.hackerrank.com/challenges/30-data-types/problem

$handle = fopen("php://stdin", "r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";

// Declare second integer, double, and String variables.
// Read and save an integer, double, and String to your variables.
$a = (int) fgets($handle);
$b = (float) fgets($handle);
$c = (string) fgets($handle);

// Print the sum of both integer variables on a new line.
echo($i + $a) . PHP_EOL;

// Print the sum of the double variables on a new line.
echo number_format($d + $b, 1) . PHP_EOL;

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
echo($s . $c) . PHP_EOL;

fclose($handle);
